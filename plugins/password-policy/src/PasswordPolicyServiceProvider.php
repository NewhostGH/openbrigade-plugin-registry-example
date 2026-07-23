<?php

namespace ObPlugins\PasswordPolicy;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Security).
 *
 * A real "Password Policy" plugin would: Enforces password length, complexity, rotation and breach-list checks on every account.
 */
class PasswordPolicyServiceProvider extends ServiceProvider
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
