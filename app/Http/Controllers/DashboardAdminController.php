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
        $inactiveAssociations = User::where('role', 'association')
        ->where('association_statut', 'inactive')
        ->get();
        $inactiveAssociationsCount = User::where('role', 'association')
        ->where('association_statut', 'inactive')
        ->count();

        $activeAssociationsCount = User::where('role', 'association')
        ->where('association_statut', 'active')
        ->count();
        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalEvenements' => $totalEvenements,
            'latestEvenements' => $latestEvenements,
            'latestUsers' => $latestUsers,
            'inactiveAssociations' => $inactiveAssociations,
            'inactiveAssociationsCount' => $inactiveAssociationsCount,
            'activeAssociationsCount' => $activeAssociationsCount
        ]);
    }
}
