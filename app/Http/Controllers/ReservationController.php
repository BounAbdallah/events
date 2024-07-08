<?php
// App\Http\Controllers\ReservationController.php

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
        $evenement = Evenement::findOrFail($id_evenement);

        if ($evenement->places_disponibles <= 0) {
            return redirect()->route('home')->with('error', 'Il n\'y a plus de places disponibles pour cet événement.');
        }

        $existingReservation = Reservation::where('id_evenement', $id_evenement)
            ->where('id_user', Auth::id())
            ->first();

        if ($existingReservation) {
            return redirect()->route('home')->with('error', 'Vous avez déjà réservé pour cet événement.');
        }

        $reservation = Reservation::create([
            'id_evenement' => $id_evenement,
            'id_user' => Auth::id(),
            'statut' => Reservation::STATUS_PENDING, // Utilisation de la constante de statut
        ]);

        Notification::send($reservation->user, new ReservationMade($reservation));

        return redirect()->route('home')->with('success', 'Réservation créée et email de confirmation envoyé!');
    }


    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
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

        return redirect()->intended('events')->with('success', 'Statut de la réservation mis à jour avec succès.');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return view('association.reservation', compact('reservations'));
    }

    public function reservation()
    {
        $reservations = Reservation::paginate(10);
        return view('association.reservation', compact('reservations'));
    }
    


    public function search(Request $request)
{
    $query = $request->input('query');

    $reservations = Reservation::whereHas('user', function ($queryBuilder) use ($query) {
        $queryBuilder->where('name', 'like', "%$query%");
    })
    ->orWhereHas('evenement', function ($queryBuilder) use ($query) {
        $queryBuilder->where('nom', 'like', "%$query%");
    })
    ->orWhereDate('created_at', 'like', "%$query%")
    ->paginate(10);

    return view('association.reservation', compact('reservations'));
}

    
}
