<?php

namespace ObPlugins\KioskMode;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (UI & Themes).
 *
 * A real "Kiosk Mode" plugin would: Locked-down fullscreen mode for shared station screens with auto-login to a read-only view.
 */
class KioskModeServiceProvider extends ServiceProvider
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
