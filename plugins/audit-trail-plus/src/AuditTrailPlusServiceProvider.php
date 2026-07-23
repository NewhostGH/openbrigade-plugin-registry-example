<?php

namespace ObPlugins\AuditTrailPlus;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Security).
 *
 * A real "Audit Trail Plus" plugin would: Extends the activity journal with field-level diffs, export and configurable retention.
 */
class AuditTrailPlusServiceProvider extends ServiceProvider
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
