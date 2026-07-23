<?php

namespace ObPlugins\ApiExplorer;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Developer Tools).
 *
 * A real "API Explorer" plugin would: Interactive explorer for the REST API with token management and request history.
 */
class ApiExplorerServiceProvider extends ServiceProvider
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
