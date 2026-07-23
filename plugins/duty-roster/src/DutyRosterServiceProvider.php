<?php

namespace ObPlugins\DutyRoster;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Calendar & Events).
 *
 * A real "Duty Roster" plugin would: Monthly duty roster with drag-and-drop swaps, approval workflow and conflict detection.
 */
class DutyRosterServiceProvider extends ServiceProvider
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
