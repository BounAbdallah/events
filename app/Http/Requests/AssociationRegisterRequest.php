<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssociationRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'association_nom' => 'required|string|max:255',
            'association_description' => 'nullable|string',
            'association_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'association_localisation' => 'nullable|string|max:255',
            'association_numero' => 'required|string|max:15',
            'association_secteur_activite' => 'nullable|string|max:255',
            'association_ninea' => 'required|string|max:20',
            'association_date_creation' => 'required|date',
            'association_statut' => 'nullable|string|max:255',
        ];
    }
}
