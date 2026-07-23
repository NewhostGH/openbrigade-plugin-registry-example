<?php

namespace ObPlugins\FeatureFlags;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Developer Tools).
 *
 * A real "Feature Flags" plugin would: Simple feature-flag manager to roll new functions out gradually per role or percentage.
 */
class FeatureFlagsServiceProvider extends ServiceProvider
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
