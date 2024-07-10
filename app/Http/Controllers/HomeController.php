<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\User;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function index()
    {
        $associations = User::where('role','association');
        $evenements = Evenement::where('date_evenement', '>=', Carbon::now())
                               ->orderBy('date_evenement')
                               ->limit(6) // Limitez le nombre d'événements à afficher si nécessaire
                               ->get();

        return view('welcome', compact('evenements', 'associations'));
    }
    public function detail($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('details', compact('evenement'));
    }
}
