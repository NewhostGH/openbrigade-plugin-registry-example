<?php

namespace ObPlugins\HolidayCalendar;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Calendar & Events).
 *
 * A real "Holiday Calendar" plugin would: Imports public holidays per region and adjusts reminder and roster rules around them.
 */
class HolidayCalendarServiceProvider extends ServiceProvider
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
