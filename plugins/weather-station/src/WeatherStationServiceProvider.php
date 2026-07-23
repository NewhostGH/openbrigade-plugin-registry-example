<?php

namespace ObPlugins\WeatherStation;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Integration).
 *
 * A real "Weather Station" plugin would: Shows live local weather and severe-weather warnings from an open meteorological API on the dashboard.
 */
class WeatherStationServiceProvider extends ServiceProvider
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
