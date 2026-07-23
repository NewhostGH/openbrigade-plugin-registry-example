<?php

namespace ObPlugins\HelloWorld;

use Illuminate\Support\ServiceProvider;

/**
 * Deliberate no-op: this template plugin registers nothing and boots
 * nothing. It exists to prove the download → verify → install → enable
 * pipeline end to end.
 */
class HelloWorldServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Intentionally empty.
    }

    public function boot(): void
    {
        // Intentionally empty.
    }
}
