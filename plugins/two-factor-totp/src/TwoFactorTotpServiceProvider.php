<?php

namespace ObPlugins\TwoFactorTotp;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Security).
 *
 * A real "Two-Factor TOTP" plugin would: Adds TOTP two-factor authentication with QR-code enrolment and per-role enforcement.
 */
class TwoFactorTotpServiceProvider extends ServiceProvider
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
