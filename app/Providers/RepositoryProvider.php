<?php

namespace App\Providers;

use App\Modules\System\Module\Repository\Impl\ModuleRepositoryDefaultImpl;
use App\Modules\System\Module\Repository\ModuleRepository;
use App\Modules\System\Module\Transformer\ModuleTransformer;
use App\Modules\System\NumberSeries\Repository\Impl\NumberSeriesRepositoryDefaultImpl;
use App\Modules\System\NumberSeries\Repository\NumberSeriesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

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
    public function register()
    {

        $this->app->bind(NumberSeriesRepository::class, NumberSeriesRepositoryDefaultImpl::class);
        $this->app->bind(ModuleRepository::class, function()
        {
            $transformer = new ModuleTransformer();
            return new ModuleRepositoryDefaultImpl($transformer);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            NumberSeriesRepository::class,
            ModuleRepository::class,
        ];
    }

}
