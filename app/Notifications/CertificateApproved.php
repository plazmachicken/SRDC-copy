<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CertificateApproved extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $downloadLink;
    public function __construct($downloadLink)
    {
        $this->downloadLink = $downloadLink;
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
                    ->line('Congratulations! Your form has been approved.')
                    ->action('Download Your Certificate', $this->downloadLink)
                    ->line('Thank you for using our application!')
                    ->line('Regards,')
                    ->salutation('Sarawak Research and Development Council');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */


    public function toDatabase(object $notifiable): array
    {
        return [
            'type' => 'certificate',
            'data' => [

                'message' => 'Congratulations! Your form has been approved. Click here to download your certificate.',
                'link' => $this->downloadLink,
            ],
        ];

    }
}
