<?php

namespace App\Notifications;

use App\Models\Intervention;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class urgence extends Notification
{
    use Queueable;
    private $interventions;

  /**
     * Create a new not ification instance.
     *
     * @return void
     */

    public function __construct(Intervention  $interventions)
    {
        $this->interventions=$interventions;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database'];
    }

/**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    // public function toArray($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }


    public function toDatabase($notifiable)
    {
        return [
           //'data' => $this->details['body']

           'id'=>$this->interventions->id,
           'title'=>'il y\'a un nouvelle intervention : ',
           'user',
        ];
    }
}
