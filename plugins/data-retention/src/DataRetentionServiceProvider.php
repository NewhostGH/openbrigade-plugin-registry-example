<?php

namespace ObPlugins\DataRetention;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Automation).
 *
 * A real "Data Retention" plugin would: Applies GDPR retention rules: anonymises or purges personal data past its legal retention period.
 */
class DataRetentionServiceProvider extends ServiceProvider
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
