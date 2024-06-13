<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidatureApprouveeNotification extends Notification
{
    use Queueable;

    protected $candidature;

    public function __construct($candidature)
    {
        $this->candidature = $candidature;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Votre candidature a été approuvée')
                    ->greeting('Bonjour ' . $notifiable->name . ',')
                    ->line('Nous avons le plaisir de vous informer que votre candidature pour la formation ' . $this->candidature->cohorte->referentiel->libelle . ' a été approuvée.')
                    ->action('Voir les détails de la formation', url('/referentiels/' . $this->candidature->cohorte->referentiel->id))
                    ->line('Merci pour votre intérêt et à bientôt!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Votre candidature pour la formation ' . $this->candidature->referentiel->libelle . ' a été approuvée.',
        ];
    }
}
