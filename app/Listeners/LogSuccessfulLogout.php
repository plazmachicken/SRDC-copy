<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Log;
class LogSuccessfulLogout
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $user = $event->user;
        if ($user) {
            Log::info('User Logged Out', [
                'user_id' => $user->id,
                'email' => $user->email,
                'timestamp' => now(),
            ]);
        }
    }
}
