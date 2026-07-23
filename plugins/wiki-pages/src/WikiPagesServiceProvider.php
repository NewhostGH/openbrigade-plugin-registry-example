<?php

namespace ObPlugins\WikiPages;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Content).
 *
 * A real "Wiki Pages" plugin would: Internal wiki with versioned pages for procedures, checklists and station knowledge.
 */
class WikiPagesServiceProvider extends ServiceProvider
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
