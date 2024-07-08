<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evenement;
use App\Models\Reservation;

class DashboardController extends Controller
{

    public function index()
    {
        $evenements = Evenement::all();
        return view('user.dasboard', compact('evenements'));
    }

    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('user.dashboard', compact('evenement'));
    }

}
