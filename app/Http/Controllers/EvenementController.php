<?php
namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return view('association.events.index', compact('evenements'));
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
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
    
        Evenement::create([
            // 'association_id' => auth()->user()->id, 
            'nom' => $request->nom,
            'description' => $request->description,
            'lieu' => $request->lieu,
            'date_evenement' => $request->date_evenement,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'date_cloture_inscription' => $request->date_cloture_inscription,
            'image' => $imageName,
            'nombre_places' => $request->nombre_places,
            'categorie' => $request->categorie,
            'statut' => $request->statut,
        ]);
    
        return redirect()->intended('/dashboard/association')->with('success', 'Événement créé avec succès.');
    }
    
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('association.events.details', compact('evenement'));
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

        $evenement = Evenement::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            if (file_exists(public_path('images/' . $evenement->image))) {
                unlink(public_path('images/' . $evenement->image));
            }
            $evenement->image = $imageName;
        }

        $evenement->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'lieu' => $request->lieu,
            'date_evenement' => $request->date_evenement,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
            'date_cloture_inscription' => $request->date_cloture_inscription,
            'nombre_places' => $request->nombre_places,
            'categorie' => $request->categorie,
            'statut' => $request->statut,
            'association_id' => auth()->user()->id, // Mise à jour de l'association_id
        ]);

        return redirect()->intended('/dashboard/association')->with('success', 'Événement modifié avec succès.');
    }

    public function destroy($id)
    {
        // Trouver l'événement à supprimer
        $evenement = Evenement::findOrFail($id);

        // Supprimer l'image associée si elle existe
        if (file_exists(public_path('images/' . $evenement->image))) {
            unlink(public_path('images/' . $evenement->image));
        }

        // Supprimer l'événement de la base de données
        $evenement->delete();

        return redirect()->intended('/dashboard/association')->with('success', 'Événement supprimé avec succès.');
    }

    public function manageReservations($id)
    {
        $evenement = Evenement::findOrFail($id);
        $reservations = Reservation::where('id_evenement', $id)->get();

        return view('association.events.manage_reservations', compact('evenement', 'reservations'));
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
