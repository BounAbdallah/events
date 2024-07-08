<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $evenements = Evenement::where('date_evenement', '>=', Carbon::now())
                               ->orderBy('date_evenement')
                               ->limit(6) // Limitez le nombre d'événements à afficher si nécessaire
                               ->get();

        return view('welcome', compact('evenements'));
    }
    public function detail($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('details', compact('evenement'));
    }
}
