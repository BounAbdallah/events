<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ReservationMade;
use Illuminate\Support\Facades\Notification;




class ReservationController extends Controller
{
    public function store($id_evenement)
    {
        $existingReservation = Reservation::where('id_evenement', $id_evenement)
            ->where('id_user', Auth::id())
            ->first();

        if ($existingReservation) {
            return redirect()->route('home')->with('error', 'Vous avez déjà réservé pour cet événement.');
        }

        $reservation = Reservation::create([
            'id_evenement' => $id_evenement,
            'id_user' => Auth::id(),
            'statut' => Reservation::STATUS_PENDING,
        ]);

        $evenement = Evenement::findOrFail($id_evenement);  // Récupérer l'événement associé

        // Mail::to($reservation->user->email)
        //   ->send(new ReservationConfirmationEmail($reservation, $evenement));  // Envoyer l'email avec la réservation et l'événement
        $user = User::find($reservation->id_user);
        Notification::send($user, new ReservationMade($reservation));

        return redirect()->route('home')->with('success', 'Réservation créée et email de confirmation envoyé!');
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'statut' => 'required|in:'.Reservation::STATUS_PENDING.','.Reservation::STATUS_CONFIRMED.','.Reservation::STATUS_CANCELED,
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->statut = $request->statut;
        $reservation->save();

        return redirect()->route('reservations.index')->with('success', 'Statut de la réservation mis à jour avec succès.');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }
}
