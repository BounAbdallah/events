<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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

        // Récupérer tous les rôles
        $roles = Role::all();

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalEvenements' => $totalEvenements,
            'latestEvenements' => $latestEvenements,
            'latestUsers' => $latestUsers,
            'inactiveAssociations' => $inactiveAssociations,
            'inactiveAssociationsCount' => $inactiveAssociationsCount,
            'activeAssociationsCount' => $activeAssociationsCount,
            'roles' => $roles
        ]);
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
        ]);

        Role::create(['name' => $request->name]);

        return redirect()->route('admin.dashboard')->with('success', 'Role added successfully.');
    }

    public function updateRole(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
        ]);

        if (in_array($role->name, ['admin', 'user', 'association'])) {
            return redirect()->route('admin.dashboard')->with('error', 'You cannot edit this role.');
        }

        $role->update(['name' => $request->name]);

        return redirect()->route('admin.dashboard')->with('success', 'Role updated successfully.');
    }

    public function destroyRole(Role $role)
    {
        if (in_array($role->name, ['admin', 'user', 'association'])) {
            return redirect()->route('admin.dashboard')->with('error', "Vous n'avez pas le droit de suprimer ce role.");
        }

        $role->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Role deleted successfully.');
    }
}
