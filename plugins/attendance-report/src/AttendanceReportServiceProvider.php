<?php

namespace ObPlugins\AttendanceReport;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Reporting).
 *
 * A real "Attendance Report" plugin would: Tracks training and exercise attendance rates per member with threshold warnings.
 */
class AttendanceReportServiceProvider extends ServiceProvider
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
