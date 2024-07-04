<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; // Importation du trait Notifiable
use App\Notifications\ReservationMade; // Importation de la notification ReservationMade

class Reservation extends Model
{
    use HasFactory, Notifiable; // Utilisation du trait Notifiable

    const STATUS_PENDING = 'en attente';
    const STATUS_CONFIRMED = 'confirmée';
    const STATUS_CANCELED = 'annulée';

    protected $fillable = [
        'id_evenement',
        'id_user',
        'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'id_evenement');
    }

    protected static function booted()
    {
        static::created(function ($reservation) {
            $reservation->notify(new ReservationMade($reservation)); // Envoi de la notification lors de la création
        });
    }
}
