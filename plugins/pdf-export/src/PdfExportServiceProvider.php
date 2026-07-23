<?php

namespace ObPlugins\PdfExport;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Reporting).
 *
 * A real "PDF Export" plugin would: One-click PDF export of intervention reports, rosters and member files with station letterhead.
 */
class PdfExportServiceProvider extends ServiceProvider
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
