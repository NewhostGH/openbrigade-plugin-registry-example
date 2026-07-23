<?php

namespace ObPlugins\DocumentTags;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Content).
 *
 * A real "Document Tags" plugin would: Adds free-form tags and saved filters to the document library for faster retrieval.
 */
class DocumentTagsServiceProvider extends ServiceProvider
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
