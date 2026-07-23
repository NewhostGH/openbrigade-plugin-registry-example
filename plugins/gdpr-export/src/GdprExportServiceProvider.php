<?php

namespace ObPlugins\GdprExport;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Data & Import).
 *
 * A real "GDPR Export" plugin would: Produces a complete machine-readable export of one member's personal data on request.
 */
class GdprExportServiceProvider extends ServiceProvider
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
