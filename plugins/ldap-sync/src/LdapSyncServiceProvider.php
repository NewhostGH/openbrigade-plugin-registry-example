<?php

namespace ObPlugins\LdapSync;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Integration).
 *
 * A real "LDAP Sync" plugin would: Synchronises member accounts and groups from an LDAP or Active Directory server on a schedule.
 */
class LdapSyncServiceProvider extends ServiceProvider
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
