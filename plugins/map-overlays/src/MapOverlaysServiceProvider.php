<?php

namespace ObPlugins\MapOverlays;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Integration).
 *
 * A real "Map Overlays" plugin would: Adds hydrant, access-road and risk-zone overlays to intervention maps from GeoJSON sources.
 */
class MapOverlaysServiceProvider extends ServiceProvider
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
