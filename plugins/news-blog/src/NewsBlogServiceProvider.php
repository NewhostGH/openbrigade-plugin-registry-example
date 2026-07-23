<?php

namespace ObPlugins\NewsBlog;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Content).
 *
 * A real "News and Blog" plugin would: A small news module with drafts, cover images and a public archive page.
 */
class NewsBlogServiceProvider extends ServiceProvider
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
