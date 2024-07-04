<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create(Evenement $evenement)
    {
        $user = Auth::user();
        return view('reservations.create', compact('evenement', 'user'));
    }

    public function store(Request $request, Evenement $evenement)
    {
        $user = Auth::user();

        Reservation::create([
            'id_user' => Auth::user()->id,
            'id_evenement' => $evenement->id,
            'statut' => 'en attente', // Valeur par défaut
        ]);

        // Envoyer l'email de confirmation ici si nécessaire

        return redirect()->route('reservations.create', ['evenement' => $evenement->id])
            ->with('success', 'Votre réservation a été confirmée.');
    }
}