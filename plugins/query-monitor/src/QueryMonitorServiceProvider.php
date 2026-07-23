<?php

namespace ObPlugins\QueryMonitor;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Developer Tools).
 *
 * A real "Query Monitor" plugin would: Developer toolbar showing slow queries, cache hits and request timings per page.
 */
class QueryMonitorServiceProvider extends ServiceProvider
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
