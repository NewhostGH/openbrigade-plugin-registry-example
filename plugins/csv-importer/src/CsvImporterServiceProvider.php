<?php

namespace ObPlugins\CsvImporter;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Data & Import).
 *
 * A real "CSV Importer" plugin would: Imports members, vehicles and inventory from CSV or Excel with column mapping and dry-run preview.
 */
class CsvImporterServiceProvider extends ServiceProvider
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
