<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidatureRejeteeNotification extends Notification
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
                    ->subject('Votre candidature a été rejetée')
                    ->greeting('Bonjour ' . $notifiable->name . ',')
                    ->line('Nous regrettons de vous informer que votre candidature pour la formation ' . $this->candidature->referentiel->libelle . ' a été rejetée.')
                    ->line('Merci pour votre intérêt.');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Votre candidature pour la formation ' . $this->candidature->referentiel->libelle . ' a été rejetée.',
        ];
    }
}
