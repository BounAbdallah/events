<?php
// App\Models\Reservation.php

namespace App\Models;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    const STATUS_PENDING = 'en attente';
    const STATUS_CONFIRMED = 'confirmée';
    const STATUS_CANCELED = 'annulée';

    protected $fillable = [
        'id_evenement', 'id_user', 'statut'
    ];

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'id_evenement');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
