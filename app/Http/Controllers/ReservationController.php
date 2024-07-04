<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;

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

        Reservation::create([
            'id_evenement' => $id_evenement,
            'id_user' => Auth::id(),
            'statut' => Reservation::STATUS_PENDING,
        ]);

        return redirect()->route('home')->with('success', 'Réservation créée avec succès!');
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
