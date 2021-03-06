<?php

namespace App\Observers;

use App\Models\Job;
use App\Models\User;
use App\Notifications\NewJobImmediateNotification;
use Notification;

class JobObserver
{
    /**
     * Handle the job "created" event.
     *
     * @param  \App\Job  $job
     * @return void
     */
    public function created(Job $job)
    {
        $job->skills()->sync(request()->input('skills', []));
        $skills = $job->skills->pluck('id');
        $users = User::where('notifications_frequency', 'immediately')
            ->whereHas('skills', function ($query) use ($skills) {
                $query->whereIn('id', $skills);
            })->get();

        Notification::send($users, new NewJobImmediateNotification($job));
    }
}
