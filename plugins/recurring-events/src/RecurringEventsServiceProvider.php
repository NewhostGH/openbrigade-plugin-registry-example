<?php

namespace ObPlugins\RecurringEvents;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Calendar & Events).
 *
 * A real "Recurring Events" plugin would: Recurring trainings and meetings with per-occurrence overrides and attendance pre-fill.
 */
class RecurringEventsServiceProvider extends ServiceProvider
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
