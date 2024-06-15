<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidatureStatusChanged extends Notification
{
    use Queueable;

    protected $candidature;
    protected $statut;
    /**
     * Create a new notification instance.
     */
    public function __construct($candidature, $statut)
    {
        $this->candidature = $candidature;
        $this->statut = $statut;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        if ($this->statut == 'accepté') {
            return (new MailMessage)
                ->subject('Félicitations pour votre candidature!')
                ->greeting('Bonjour ' . $this->candidature->user->prenom . ' '. $this->candidature->user->nom .',')
                ->line('Nous avons le plaisir de vous informer que votre candidature pour la formation '.$this->candidature->cohorte->referentiel->libelle.' a été validée.')
                ->line('Merci pour votre candidature!');
        } elseif ($this->statut == 'rejeté') {
            return (new MailMessage)
                ->subject('Mise à jour de votre candidature')
                ->greeting('Bonjour ' . $this->candidature->user->prenom . ',')
                ->line('Nous regrettons de vous informer que votre candidature la formation '.$this->candidature->cohorte->referentiel->libelle.' a été rejetée.')
                ->line('Merci pour votre candidature.');
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
