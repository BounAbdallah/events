<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Evenement;


class DashboardUserController extends Controller
{

    public function index()
    {
        $evenements = Evenement::all();
        return view('user/dasboard', compact('evenements'));
    }

    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('user/dashboard', compact('evenement'));
    }
    public function events()
    {
        $evenements = Evenement::all();
        return view('user.events', compact('evenements'));
    }
    
}
