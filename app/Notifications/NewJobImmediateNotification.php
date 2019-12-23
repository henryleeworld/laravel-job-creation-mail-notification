<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewJobImmediateNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($job)
    {
        $this->job = $job;
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
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('新的徵才已經寄送')
                    ->line('一個新的徵才啟事已經寄送：'.$this->job->title)
                    ->line('擅長工具：'.$this->job->skills->implode('name', ', '))
                    ->line('職務說明：'.$this->job->description)
                    ->line('聯絡電子郵件：'.$this->job->contact_email)
                    ->action('檢視徵才', route('admin.jobs.show', $this->job->id))
                    ->line('感謝您使用我們的應用程式！');
    }
}
