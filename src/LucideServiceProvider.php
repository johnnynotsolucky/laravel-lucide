<?php

namespace johnnynotsolucky\Lucide;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LucideServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load the views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lucide');

        // Publish the views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/lucide'),
        ], 'lucide-views');

        // Register the component namespace with a shorter path
        Blade::componentNamespace('johnnynotsolucky\\Lucide\\View\\Components\\Icons', 'lucide');
    }
} 