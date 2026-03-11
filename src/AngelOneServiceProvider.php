<?php

namespace MansuriyaBrij\AngelOne;

use Illuminate\Support\ServiceProvider;

class AngelOneServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('angelone', function () {
            return new SmartApi();
        });
    }
}