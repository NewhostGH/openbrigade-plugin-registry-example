<?php

namespace ObPlugins\DarkThemePro;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (UI & Themes).
 *
 * A real "Dark Theme Pro" plugin would: A polished dark theme with high-contrast and AMOLED variants plus per-user preference.
 */
class DarkThemeProServiceProvider extends ServiceProvider
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
