<?php

namespace ObPlugins\AutoArchiver;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Automation).
 *
 * A real "Auto Archiver" plugin would: Archives closed interventions and outdated documents automatically after a configurable delay.
 */
class AutoArchiverServiceProvider extends ServiceProvider
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
