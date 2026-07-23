<?php

namespace ObPlugins\EmailDigest;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Communication).
 *
 * A real "Email Digest" plugin would: Weekly email digest summarising interventions, upcoming events and roster changes for every active member.
 */
class EmailDigestServiceProvider extends ServiceProvider
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
