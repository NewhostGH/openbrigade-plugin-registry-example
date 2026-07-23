<?php

namespace ObPlugins\WidgetPack;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (UI & Themes).
 *
 * A real "Widget Pack" plugin would: Extra dashboard widgets: countdowns, quick links, on-call board and a live intervention ticker.
 */
class WidgetPackServiceProvider extends ServiceProvider
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
