<?php

namespace App\Providers;

use Roots\Acorn\Sage\SageServiceProvider;


class ThemeServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Register your view composers
        $this->composeViews();
    }

    /**
     * Register Blade view composers
     */
    protected function composeViews(): void
    {
        view()->composer([
            'layouts.single-entity',
            'single-entity', // fallback just in case you move it
        ], \App\View\Composers\SingleEntity::class);
        view()->composer('layouts.single-entity', \App\View\Composers\SingleVehicle::class);
        view()->composer('layouts.taxonomy-entity', \App\View\Composers\EntityArchive::class);
    }
}
