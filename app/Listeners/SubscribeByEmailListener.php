<?php

namespace App\Listeners;

use App\Events\SubscribeByEmailEvent;
use App\Mail\SubscribeByEmailMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SubscribeByEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SubscribeByEmailEvent $event)
    {
        $send_email_to = $event->data['send_email_to'];

        Mail::to($send_email_to)->send(new SubscribeByEmailMailer($event->data));
    }
}