<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateFormNotification extends Notification implements ShouldQueue
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
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('A new form has been created.')
            ->action('View Form', route('superadmin.forms.show', ['id' => $this->form->id, 'form' => $this->form->formType]))
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
        // dd($this->form->formType);
        return [
            'type' => 'update_form',
            'data' => [
                'form_id' => $this->form->id,
                'message' => 'Your Form has been '.$this->form->is_complete.'.',
                'link' => route('ipstatus.show', ['id' => $this->form->id, 'formType' => $this->form->formType]),
            ],
        ];
    }
}
