<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Evenement;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class ConfirmationReservation extends Mailable
{
    use Queueable, SerializesModels;

    public $utilisateur;
    public $evenement;

    public function __construct(User $utilisateur, Evenement $evenement)
    {
        $this->utilisateur = $utilisateur;
        $this->evenement = $evenement;
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Confirmation de réservation pour l\'événement "' . $this->evenement->nom . '"'
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.reservation-confirmation',
            with: [
                'utilisateur' => $this->utilisateur,
                'evenement' => $this->evenement,
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}
