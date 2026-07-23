<?php

namespace ObPlugins\PushNotifications;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Communication).
 *
 * A real "Push Notifications" plugin would: Browser push notifications for alerts, event reminders and duty changes, with per-user opt-in.
 */
class PushNotificationsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Intentionally empty: catalog example only.
    }

    public function boot(): void
    {
        // Intentionally empty: catalog example only.
    }
}
