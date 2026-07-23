<?php

namespace ObPlugins\CalendarFeed;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Integration).
 *
 * A real "Calendar Feed" plugin would: Publishes duty rosters and events as read-only iCal feeds subscribable from any phone calendar.
 */
class CalendarFeedServiceProvider extends ServiceProvider
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
