<?php

namespace ObPlugins\ExampleNoop;

use Illuminate\Support\ServiceProvider;

/**
 * Deliberate no-op: registers nothing, boots nothing. A second catalog
 * entry so multi-plugin registries can be exercised.
 */
class ExampleNoopServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Intentionally empty.
    }

    public function boot(): void
    {
        // Intentionally empty.
    }
}
