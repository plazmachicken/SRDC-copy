<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EntryDeadlineNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $entry;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($entry)
    {
        $this->entry = $entry;
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
    public function toDatabase($notifiable)
    {
        return [

            'type' => 'deadline',
            'data' => [
                'entry_id' => $this->entry->id,
                'title' => $this->entry->inventiontitle,
                'remaining_days' =>  intval($this->entry->remaining_days),
                'url' => route('superadmin.ips.show', ['formType' => $this->entry->formType, 'id' => $this->entry->id]),
            ],
        ];
    }
}
