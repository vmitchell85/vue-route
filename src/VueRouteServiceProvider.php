<?php

namespace Vmitchell85\VueRoute;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class VueRouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'vue-route');

        Route::macro('vue', function ($path, $componentName, $layout = 'layouts.app', $section = 'content') {
            Route::get($path, function () use ($layout, $componentName, $section) {
                return view('vue-route::vue', [
                    'layout' => $layout,
                    'section' => $section,
                    'componentName' => $componentName
                ]);
            });
        });
    }
}
