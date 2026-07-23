<?php

namespace ObPlugins\TrainingCompliance;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Reporting).
 *
 * A real "Training Compliance" plugin would: Matrix of required certifications versus member qualifications, highlighting expiry dates.
 */
class TrainingComplianceServiceProvider extends ServiceProvider
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
