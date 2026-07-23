<?php

namespace ObPlugins\SmsAlerts;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Communication).
 *
 * A real "SMS Alerts" plugin would: Sends SMS alerts to on-call members the moment a new intervention is opened, with configurable escalation delays.
 */
class SmsAlertsServiceProvider extends ServiceProvider
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
