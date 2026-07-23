<?php

namespace ObPlugins\ReminderBot;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Automation).
 *
 * A real "Reminder Bot" plugin would: Sends automatic reminders for expiring certifications, medical checks and equipment tests.
 */
class ReminderBotServiceProvider extends ServiceProvider
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
