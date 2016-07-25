<?php namespace Andrewboy\GoogleAnalyticsAdminPanel;

use Illuminate\Support\ServiceProvider;

/**
 * Class GoogleAnalyticsAdminPanelServiceProvider
 * @package Andrewboy\GoogleAnalyticsAdminPanel
 */
class LaravelGaStatisticsPanelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }


    /**
     * Set service provider
     * @return void
     */
    public function boot()
    {
        $resourcesDir = __DIR__ .'/../../resources';

        // VIEW
        $this->loadViewsFrom(
            $resourcesDir.'/views/laravel_ga_statistics_panel/adminlte',
            'laravel-ga-statistics-panel-adminlte'
        );
        $this->loadViewsFrom(
            $resourcesDir.'/views/laravel_ga_statistics_panel/adminlte/boxes',
            'laravel-ga-statistics-panel-adminlte-boxes'
        );

        $this->publishes([
            $resourcesDir .'/views/laravel_ga_statistics_panel/' => base_path('resources/views/vendor/laravel-ga-statistics-panel')
        ]);

        #TRANSLATIONS
        $this->loadTranslationsFrom(
            $resourcesDir.'/lang/',
            'laravel-ga-statistics-panel'
        );
        $this->publishes(
            [
                $resourcesDir .'/lang/' => base_path('resources/lang/vendor/laravel-ga-statistics-panel'),
            ]
        );

        #ASSETS
        $this->publishes(
            [
                $resourcesDir .'/assets/' => public_path('vendor/laravel-ga-statistics-panel'),
            ],
            'public'
        );
    }
}