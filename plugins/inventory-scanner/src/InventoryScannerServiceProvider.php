<?php

namespace ObPlugins\InventoryScanner;

use Illuminate\Support\ServiceProvider;

/**
 * Catalog example — intentionally a no-op (Data & Import).
 *
 * A real "Inventory Scanner" plugin would: Barcode and QR scanning for equipment check-in and check-out from any phone camera.
 */
class InventoryScannerServiceProvider extends ServiceProvider
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
