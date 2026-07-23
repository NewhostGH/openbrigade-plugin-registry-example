<?php

namespace ObPlugins\BackupScheduler;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Automation).
 *
 * A real "Backup Scheduler" plugin would: Schedules encrypted database and file backups to local or S3-compatible storage.
 */
class BackupSchedulerServiceProvider extends ServiceProvider
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
