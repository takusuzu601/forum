<?php

namespace Forum\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Forum\Discussion;

class ReplyMarkedAsBestReply extends Notification implements ShouldQueue
{
    use Queueable;

    public $discussion;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Discussion $discussion)
    {
        $this->discussion=$discussion;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Your reply was maeked as best reply.')
                    ->action('View Discussion', url('discussion.show',$this->discussion->slug))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'discussion'=>$this->discussin
        ];
    }
}
