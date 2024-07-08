<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Affiche le formulaire d'enregistrement pour les utilisateurs.
     */
    public function showUserRegistrationForm()
    {
        return view('auth.register-user');
    }

    /**
     * Gère la soumission du formulaire d'enregistrement pour les utilisateurs.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Assigner le rôle utilisateur ici
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }

    /**
     * Affiche le formulaire d'enregistrement pour les associations.
     */
    public function showAssociationRegistrationForm()
    {
        return view('auth.register-association');
    }

    /**
     * Gère la soumission du formulaire d'enregistrement pour les associations.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerAssociation(Request $request)
{
    dd($request->all());
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'association_nom' => ['required', 'string'],
        'association_description' => ['nullable', 'string'],
        'association_logo' => ['nullable', 'image', 'max:2048'], // Validation pour l'image du logo
        'association_localisation' => ['nullable', 'string'],
        'association_numero' => ['nullable', 'string'],
        'association_secteur_activite' => ['nullable', 'string'],
        'association_ninea' => ['nullable', 'string'],
        'association_date_creation' => ['nullable', 'date'],
        'association_statut' => ['nullable', 'string'],
    ]);

    // Traitement de l'upload du logo
    if ($request->hasFile('association_logo')) {
        $file = $request->file('association_logo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/association_logos', $fileName); // Stockage local dans le dossier public/association_logos
    } else {
        $fileName = null; // Ajustement pour gérer le cas où aucun logo n'est téléchargé
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'association',
        'association_nom' => $request->association_nom,
        'association_description' => $request->association_description,
        'association_logo' => $fileName ? 'public/association_logos/' . $fileName : null, // Sauvegarde du chemin du logo
        // Ajoutez d'autres champs associatifs ici
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect()->intended('/dashboard/association');
}


    /**
     * Affiche le formulaire d'enregistrement pour les administrateurs.
     */
    public function showAdminRegistrationForm()
    {
        return view('auth.register-admin');
    }

    /**
     * Gère la soumission du formulaire d'enregistrement pour les administrateurs.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function registerAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'admin_prenom' => ['required', 'string', 'max:255'],
            'admin_nom' => ['required', 'string', 'max:255'],
            'admin_telephone' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // Assigner le rôle administrateur ici
            'admin_prenom' => $request->admin_prenom,
            'admin_nom' => $request->admin_nom,
            'admin_telephone' => $request->admin_telephone,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('admin.dashboard');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Affiche le formulaire d'édition du rôle de l'utilisateur.
     */
    public function editRole($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Met à jour le rôle de l'utilisateur.
     */
    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|string|in:admin,user,association',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Rôle mis à jour avec succès.');
    }
}
