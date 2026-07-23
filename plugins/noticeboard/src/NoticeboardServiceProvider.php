<?php

namespace ObPlugins\Noticeboard;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Communication).
 *
 * A real "Digital Noticeboard" plugin would: Fullscreen station noticeboard rotating announcements, weather and the day's duty roster.
 */
class NoticeboardServiceProvider extends ServiceProvider
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
