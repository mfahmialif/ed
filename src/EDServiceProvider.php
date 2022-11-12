<?php

namespace Mfahmialif\ED;

use Illuminate\Support\ServiceProvider;

class EDServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/htaccess' => base_path('/')
        ], 'ez-deploy');
    }

    public function register()
    {
    }
}
