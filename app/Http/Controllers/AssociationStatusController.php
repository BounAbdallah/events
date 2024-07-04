<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssociationStatusController extends Controller
{
    /**
     * Affiche la liste des associations avec leurs statuts.
     */
    public function index()
    {
        $associations = User::where('role', 'association')->get();
        return view('admin.associations.index', compact('associations'));
    }

    /**
     * Change le statut d'une association.
     */
    public function updateStatus(Request $request, $id)
    {
        $association = User::findOrFail($id);
        $association->association_statut = $request->status;
        $association->save();

        return redirect()->route('admin.associations.index')->with('status', 'Statut mis à jour avec succès.');
    }
}
