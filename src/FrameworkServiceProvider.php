<?php namespace WhiteFrame\Framework;

use Illuminate\Support\ServiceProvider;
use Pingpong\Widget\WidgetServiceProvider;
use WhiteFrame\Dynatable\DynatableServiceProvider;
use WhiteFrame\Helloquent\HelloquentServiceProvider;
use WhiteFrame\Http\HttpServiceProvider;
use WhiteFrame\Statistics\StatisticsServiceProvider;
use WhiteFrame\Support\Framework;
use WhiteFrame\View\ViewServiceProvider;

/**
 * Class FrameworkServiceProvider
 * @package WhiteFrame\Framework
 */
class FrameworkServiceProvider extends ServiceProvider
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
        Framework::registerPackage('framework');

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
            __DIR__.'/../config/framework.php' => base_path('config/framework.php'),
        ], 'config');
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
