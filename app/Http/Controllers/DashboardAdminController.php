<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
  
    public function index()
    {
        // Nombre total d'utilisateurs
        $totalUsers = User::count();

        // Nombre total d'événements
        $totalEvenements = Evenement::count();

        // Récupérer les 5 derniers événements
        $latestEvenements = Evenement::orderBy('created_at', 'desc')->take(5)->get();

        // Récupérer les 10 derniers utilisateurs avec leur statut
        $latestUsers = User::orderBy('created_at', 'desc')->take(10)->get();

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalEvenements' => $totalEvenements,
            'latestEvenements' => $latestEvenements,
            'latestUsers' => $latestUsers,
        ]);
    }
}
