<?php

namespace ObPlugins\LegacyMigrator;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Data & Import).
 *
 * A real "Legacy Migrator" plugin would: Migrates data from legacy 5.x installations, mapping old tables to the current schema.
 */
class LegacyMigratorServiceProvider extends ServiceProvider
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
