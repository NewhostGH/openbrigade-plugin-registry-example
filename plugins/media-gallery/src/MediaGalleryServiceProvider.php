<?php

namespace ObPlugins\MediaGallery;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Content).
 *
 * A real "Media Gallery" plugin would: Photo and video galleries per event with consent flags and bulk download.
 */
class MediaGalleryServiceProvider extends ServiceProvider
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
