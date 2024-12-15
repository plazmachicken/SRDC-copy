<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EditFormNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $form;

    public function __construct($form)
    {
        $this->form = $form;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!')
                    ->line('Regards,')
                    ->salutation('Sarawak Research and Development Council');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'edit_form',
            'data' => [
                'form_id' => $this->form->id,
                'message' =>  $this->form->user->name.' has updated its form.',
                'link' => route('superadmin.forms.show', ['id' => $this->form->id, 'form' => $this->form->formType]),
            ],
        ];
    }
}
