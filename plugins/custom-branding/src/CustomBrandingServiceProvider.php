<?php

namespace ObPlugins\CustomBranding;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (UI & Themes).
 *
 * A real "Custom Branding" plugin would: Replaces logo, colours and login screen with your brigade's own branding.
 */
class CustomBrandingServiceProvider extends ServiceProvider
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
