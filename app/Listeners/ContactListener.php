<?php

namespace App\Listeners;

use App\Events\ContactRequestEvent;
use App\Jobs\ContactJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContactListener implements ShouldQueue
{
    /**
     * Handle the event.
     */
    public function handle(ContactRequestEvent $event): void
    {
        dispatch(new ContactJob($event->getMessage()));
    }
}

