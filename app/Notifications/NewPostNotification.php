<?php

namespace App\Notifications;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPostNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $post;

    /**
     * Create a new notification instance.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new post has been added.')
                    ->action('View Post', route('posts.show', $this->post))
                    ->line('Thank you for using our application!')
                    ->line('Regards,')
                    ->salutation('Sarawak Research and Development Council'); 
    }

    
    public function toDatabase($notifiable)
    {
        return [
            // 'message' => 'A new post has been created.',
            // 'link' => url('/posts'),
            'type' => 'new_post',
            'data' => [
                'post_id' => $this->post->id,
                'message' => 'A new post has been added.'
            ],
            // Add any additional data you want to include in the notification
        ];
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
