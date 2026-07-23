<?php

namespace ObPlugins\InterventionStats;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Reporting).
 *
 * A real "Intervention Stats" plugin would: Interactive charts of intervention volume, response times and crew participation by period.
 */
class InterventionStatsServiceProvider extends ServiceProvider
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
