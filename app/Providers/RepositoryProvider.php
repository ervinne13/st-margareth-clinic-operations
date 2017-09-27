<?php

namespace App\Providers;

use App\Modules\System\Module\Repository\Impl\ModuleRepositoryDefaultImpl;
use App\Modules\System\Module\Repository\ModuleRepository;
use App\Modules\System\Module\Transformer\ModuleTransformer;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {

        $this->app->bind(ModuleRepository::class, function() {
            $transformer = new ModuleTransformer();
            return new ModuleRepositoryDefaultImpl($transformer);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [
            ModuleRepository::class
        ];
    }

}
