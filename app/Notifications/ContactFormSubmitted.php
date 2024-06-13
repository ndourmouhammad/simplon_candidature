<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormSubmitted extends Notification
{
    use Queueable;

    private $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Contact Form Submission')
                    ->greeting('Hello!')
                    ->line('You have received a new message from the contact form.')
                    ->line('Nom: ' . $this->details['nom'])
                    ->line('Prenom: ' . $this->details['prenom'])
                    ->line('Email: ' . $this->details['email'])
                    ->line('Phone: ' . $this->details['phone'])
                    ->line('Message: ' . $this->details['message'])
                    ->line('Thank you for using our application!');
    }
}
