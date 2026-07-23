<?php

namespace ObPlugins\VehicleUsage;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Reporting).
 *
 * A real "Vehicle Usage" plugin would: Logs engine hours, mileage and fuel per vehicle and flags upcoming maintenance.
 */
class VehicleUsageServiceProvider extends ServiceProvider
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
