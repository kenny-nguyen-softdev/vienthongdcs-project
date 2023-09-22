<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\CustomerContactEvent;
use App\Events\SubscribeByEmailEvent;
use App\Events\ThankYouForBuyingEvent;
use App\Listeners\CustomerContactListener;
use App\Listeners\SubscribeByEmailListener;
use App\Listeners\ThankYouForBuyingListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CustomerContactEvent::class => [
            CustomerContactListener::class,
        ],
        'Illuminate\Auth\Events\Verified' => [
            'App\Listeners\LogVerifiedUser',
        ],
        ThankYouForBuyingEvent::class => [
            ThankYouForBuyingListener::class,
        ],
        SubscribeByEmailEvent::class => [
            SubscribeByEmailListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            CustomerContactEvent::class,
            [CustomerContactListener::class, 'handle']
        );

        Event::listen(
            ThankYouForBuyingEvent::class,
            [ThankYouForBuyingListener::class, 'handle']
        );

        Event::listen(
            SubscribeByEmailEvent::class,
            [SubscribeByEmailListener::class, 'handle']
        );
    }
}