<?php

namespace ObPlugins\SessionGuard;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Security).
 *
 * A real "Session Guard" plugin would: Limits concurrent sessions per user and lets admins revoke devices remotely.
 */
class SessionGuardServiceProvider extends ServiceProvider
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
