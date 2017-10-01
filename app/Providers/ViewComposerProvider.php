<?php

namespace App\Providers;

use App\ViewComposers\Layout\SkarlaDynamicAccessLeftNav;
use App\ViewComposers\Layout\SkarlaViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {        
        View::composer('*', SkarlaViewComposer::class);
        View::composer('layouts.skarla.nav.dynamic-access-left', SkarlaDynamicAccessLeftNav::class);
    }

}
