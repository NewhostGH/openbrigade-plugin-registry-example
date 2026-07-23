<?php

namespace ObPlugins\WebhookRelay;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Integration).
 *
 * A real "Webhook Relay" plugin would: Fires signed outbound webhooks on interventions, memberships and inventory changes for external systems.
 */
class WebhookRelayServiceProvider extends ServiceProvider
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
