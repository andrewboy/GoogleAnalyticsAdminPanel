<?php namespace \Andrewboy\GoogleAnalyticsAdminPanel;

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
        #VIEW
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views/google_analytics_statistics/', 'google-analytics-statistics');
        $this->publishes([
            __DIR__. '/../../../resources/views/google_analytics_statistics/' => base_path('resources/views/vendor/google-analytics-statistics')
        ]);

        #TRANSLATIONS
        $this->loadTranslationsFrom(__DIR__ . '/../../../resources/lang/', 'google-analytics-statistics');
        $this->publishes(
            [
                __DIR__ . '/../../../resources/lang/' => base_path('resources/lang/vendor/google-analytics-statistics'),
            ]
        );

        #ASSETS
        $this->publishes(
            [
                __DIR__ . '/../../../assets/' => public_path('vendor/google-analytics-statistics'),
            ],
            'public'
        );
    }
}