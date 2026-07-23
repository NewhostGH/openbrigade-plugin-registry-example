<?php

namespace ObPlugins\DuplicateFinder;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Data & Import).
 *
 * A real "Duplicate Finder" plugin would: Detects duplicate member and equipment records with fuzzy matching and guided merge.
 */
class DuplicateFinderServiceProvider extends ServiceProvider
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
