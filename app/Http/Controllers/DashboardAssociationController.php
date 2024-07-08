<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAssociationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $evenements =Evenement::where('date_evenement', '>=', Carbon::now())
        ->orderBy('date_evenement')
        ->limit(4) // Limitez le nombre d'événements à afficher si nécessaire
        ->get();
        return view('association.dashboard', compact('evenements', 'user'));
    }

    public function create()
    {
        $categories = Evenement::ENUM_CATEGORIES;
        $statuts = Evenement::ENUM_STATUTS;
        return view('association.events.create', compact('categories', 'statuts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
            'lieu' => 'required',
            'date_evenement' => 'required|date',
            'heure_debut' => 'required|max:255',
            'heure_fin' => 'required|max:255',
            'date_cloture_inscription' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nombre_places' => 'required|integer',
            'categorie' => 'required|in:' . implode(',', Evenement::ENUM_CATEGORIES),
            'statut' => 'required|in:' . implode(',', Evenement::ENUM_STATUTS),
        ]);

        // Gestion du téléchargement de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        // Création d'un nouvel événement
        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->lieu = $request->lieu;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->heure_debut = $request->heure_debut;
        $evenement->heure_fin = $request->heure_fin;
        $evenement->date_cloture_inscription = $request->date_cloture_inscription;
        $evenement->image = $imageName;
        $evenement->nombre_places = $request->nombre_places;
        $evenement->categorie = $request->categorie;
        $evenement->statut = $request->statut;
        $evenement->save();

        return redirect()->route('events.index')->with('success', 'Événement créé avec succès.');
    }

    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('association.events.details', compact('evenement'));
    }

    public function reservation()
    {
        $reservations = Reservation::paginate(15);
        return view('association.reservation', compact('reservations'));
    }
    

    public function edit($id)
    {
        $evenement = Evenement::findOrFail($id);
        $categories = Evenement::ENUM_CATEGORIES;
        $statuts = Evenement::ENUM_STATUTS;
        return view('association.events.edit', compact('evenement', 'categories', 'statuts'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
            'lieu' => 'required',
            'date_evenement' => 'required|date',
            'heure_debut' => 'required|max:255',
            'heure_fin' => 'required|max:255',
            'date_cloture_inscription' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nombre_places' => 'required|integer',
            'categorie' => 'required|in:' . implode(',', Evenement::ENUM_CATEGORIES),
            'statut' => 'required|in:' . implode(',', Evenement::ENUM_STATUTS),
        ]);

        // Trouver l'événement à mettre à jour
        $evenement = Evenement::findOrFail($id);

        // Gestion du téléchargement de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            // Supprimer l'ancienne image si elle existe
            if (public_path('images/' . $evenement->image)) {
                unlink(public_path('images/' . $evenement->image));
            }
            $evenement->image = $imageName;
        }

        // Mettre à jour les attributs de l'événement
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->lieu = $request->lieu;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->heure_debut = $request->heure_debut;
        $evenement->heure_fin = $request->heure_fin;
        $evenement->date_cloture_inscription = $request->date_cloture_inscription;
        $evenement->nombre_places = $request->nombre_places;
        $evenement->categorie = $request->categorie;
        $evenement->statut = $request->statut;
        $evenement->save();

        return redirect()->route('/dashboard/association')->with('success', 'Événement modifié avec succès.');
    }

    public function destroy($id)
    {
        // Trouver l'événement à supprimer
        $evenement = Evenement::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if (public_path('images/' . $evenement->image)) {
            unlink(public_path('images/' . $evenement->image));
        }

        // Supprimer l'événement de la base de données
        $evenement->delete();

        return redirect()->route('association.reservation')->with('success', 'Événement supprimé avec succès.');
    }
}
