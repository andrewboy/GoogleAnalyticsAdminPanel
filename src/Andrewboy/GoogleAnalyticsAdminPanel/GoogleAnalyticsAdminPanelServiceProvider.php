<?php namespace Andrewboy\GoogleAnalyticsAdminPanel;

use Illuminate\Support\ServiceProvider;

class GoogleAnalyticsAdminPanelServiceProvider extends ServiceProvider
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

    public function boot()
    {
        $resourcesDir =  __DIR__ . '/../../resources';

        #VIEW
        $this->loadViewsFrom(
            $resourcesDir .'/views/google_analytics_statistics/',
            'google-analytics-statistics'
        );
        $this->publishes([
            $resourcesDir .'/views/google_analytics_statistics/' => base_path('resources/views/vendor/google-analytics-statistics')
        ]);

        #TRANSLATIONS
        $this->loadTranslationsFrom(
            $resourcesDir .'/lang/',
            'google-analytics-statistics'
        );
        $this->publishes(
            [
                $resourcesDir .'/lang/' => base_path('resources/lang/vendor/google-analytics-statistics'),
            ]
        );

        #ASSETS
        $this->publishes(
            [
                $resourcesDir .'/assets/' => public_path('vendor/google-analytics-statistics'),
            ],
            'public'
        );
    }
}