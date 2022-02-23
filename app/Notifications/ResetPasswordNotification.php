<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url(route('admin.password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));

        return $this->buildMailMessage($url);
    }

    /**
     * Get the reset password notification mail message for the given URL.
     *
     * @param  string  $url
     * @return MailMessage
     */
    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            //->view('auth.email.email_recovery')
            ->subject(Lang::get('Recuperar Contraseña'))
            ->line(Lang::get('Esta recibiendo este correo debido a que recibimos un requerimiento para resetear la contraseña de esta cuenta.'))
            ->action(Lang::get('Resetear Contraseña'), $url)
            ->line(Lang::get('Este link expirara en :count minutros.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('Si no envio esta solicitud, haga caso omiso de este correo.'))
            ->salutation('Gracias');
    }
}
