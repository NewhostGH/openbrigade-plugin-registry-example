<?php

namespace ObPlugins\AccessibilityPack;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (UI & Themes).
 *
 * A real "Accessibility Pack" plugin would: Larger type, dyslexia-friendly font, reduced motion and enhanced keyboard navigation options.
 */
class AccessibilityPackServiceProvider extends ServiceProvider
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
