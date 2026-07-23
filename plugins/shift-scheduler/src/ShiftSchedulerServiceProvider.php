<?php

namespace ObPlugins\ShiftScheduler;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Automation).
 *
 * A real "Shift Scheduler" plugin would: Generates fair duty rosters from availability, qualifications and rest-time rules.
 */
class ShiftSchedulerServiceProvider extends ServiceProvider
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
