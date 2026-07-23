<?php

namespace ObPlugins\EventRegistration;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Calendar & Events).
 *
 * A real "Event Registration" plugin would: Public sign-up pages for open-door days and fundraisers with capacity limits and QR tickets.
 */
class EventRegistrationServiceProvider extends ServiceProvider
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
