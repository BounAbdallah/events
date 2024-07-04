<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'lieu',
        'date_evenement',
        'heure_debut',
        'heure_fin',
        'date_cloture_inscription',
        'image',
        'nombre_places',
        'categorie',
        'statut',
    ];

    const ENUM_CATEGORIES = [
        'Art', 'Technologie', 'Sport', 'Santé', 'Éducation', 'Music', 'Conférences', 'Économie', 'Culture'
    ];

    const ENUM_STATUTS = [
        'brouillon', 'publié', 'annulé', 'passer'
    ];

    public function association()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'association_id'); 
    }
}
