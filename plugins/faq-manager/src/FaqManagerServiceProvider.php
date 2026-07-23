<?php

namespace ObPlugins\FaqManager;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Content).
 *
 * A real "FAQ Manager" plugin would: Curated FAQ section with categories, search and suggested answers for recruits.
 */
class FaqManagerServiceProvider extends ServiceProvider
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
