<?php

namespace ObPlugins\AvailabilityTracker;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Calendar & Events).
 *
 * A real "Availability Tracker" plugin would: Members declare availability windows; chiefs see live coverage and staffing gaps.
 */
class AvailabilityTrackerServiceProvider extends ServiceProvider
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
