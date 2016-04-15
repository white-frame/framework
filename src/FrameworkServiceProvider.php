<?php namespace WhiteFrame\Framework;

use Illuminate\Support\ServiceProvider;
use Pingpong\Widget\WidgetServiceProvider;
use WhiteFrame\Dynatable\DynatableServiceProvider;
use WhiteFrame\Helloquent\HelloquentServiceProvider;
use WhiteFrame\Http\HttpServiceProvider;
use WhiteFrame\Statistics\StatisticsServiceProvider;
use WhiteFrame\View\ViewServiceProvider;

/**
 * Class WhiteFrameServiceProvider
 * @package WhiteFrame\Framework
 */
class WhiteFrameServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('white-frame.framework.helper.manager', function ($app) {
            return new \WhiteFrame\Framework\Helper\Manager();
        });

        // Register 3rd party providers
        $this->app->register(WidgetServiceProvider::class);

        $this->app->register(HelloquentServiceProvider::class);
        $this->app->register(ViewServiceProvider::class);
        $this->app->register(HttpServiceProvider::class);
        $this->app->register(StatisticsServiceProvider::class);
        $this->app->register(DynatableServiceProvider::class);
    }

    /**
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/framework.php' => config_path('framework.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('white-frame/framework'),
        ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'white-frame');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/white-frame')
        ], 'view');
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
}
