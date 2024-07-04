<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirection based on roles
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended('/admin/dashboard');
            } elseif (Auth::user()->hasRole('association')) {
                return redirect()->intended('/association/dashboard');
            } elseif (Auth::user()->hasRole('user')) {
                return redirect()->intended('/user/dashboard');
            }

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => ['required', Rule::in(['admin', 'association', 'user'])],
            'association_nom' => 'required_if:role,association|string|max:255',
            'association_description' => 'required_if:role,association|string|max:1000',
            'association_logo' => 'required_if:role,association|image|max:2048',
            'association_localisation' => 'required_if:role,association|string|max:255',
            'association_numero' => 'required_if:role,association|string|max:20',
            'association_secteur_activite' => 'required_if:role,association|string|max:255',
            'association_ninea' => 'required_if:role,association|string|max:20',
            'association_date_creation' => 'required_if:role,association|date',
            'admin_prenom' => 'required_if:role,admin|string|max:255',
            'admin_nom' => 'required_if:role,admin|string|max:255',
            'admin_telephone' => 'required_if:role,admin|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $validator->validated();
        $data['password'] = Hash::make($data['password']);

        if ($request->hasFile('association_logo')) {
            $path = $request->file('association_logo')->store('logos', 'public');
            $data['association_logo'] = $path;
        }

        $user = User::create($data);
        $user->assignRole($data['role']);

        Auth::login($user);

        // Redirection based on roles
        if ($user->hasRole('admin')) {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->hasRole('association')) {
            return redirect()->intended('/association/dashboard');
        } elseif ($user->hasRole('user')) {
            return redirect()->intended('/user/dashboard');
        }

        return redirect()->intended('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function dashboard()
    {
        // Redirection based on roles
        if (Auth::user()->hasRole('admin')) {
            return redirect()->intended('/admin/dashboard');
        } elseif (Auth::user()->hasRole('association')) {
            return redirect()->intended('/association/dashboard');
        } elseif (Auth::user()->hasRole('user')) {
            return redirect()->intended('/user/dashboard');
        }

        return view('dashboard');
    }
}
