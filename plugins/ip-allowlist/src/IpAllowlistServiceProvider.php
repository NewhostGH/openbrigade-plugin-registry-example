<?php

namespace ObPlugins\IpAllowlist;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Security).
 *
 * A real "IP Allowlist" plugin would: Restricts admin panel access to configured IP ranges, with an emergency break-glass code.
 */
class IpAllowlistServiceProvider extends ServiceProvider
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
