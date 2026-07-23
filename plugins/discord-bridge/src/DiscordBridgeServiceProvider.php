<?php

namespace ObPlugins\DiscordBridge;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Communication).
 *
 * A real "Discord Bridge" plugin would: Mirrors announcements and intervention updates to a Discord channel through a webhook.
 */
class DiscordBridgeServiceProvider extends ServiceProvider
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
