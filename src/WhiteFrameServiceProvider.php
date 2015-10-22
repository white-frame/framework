<?php namespace WhiteFrame\WhiteFrame;

use Illuminate\Support\ServiceProvider;
use WhiteFrame\Dynatable\DynatableServiceProvider;
use WhiteFrame\Helloquent\HelloquentServiceProvider;
use WhiteFrame\Http\HttpServiceProvider;
use WhiteFrame\Statistics\StatisticsServiceProvider;

/**
 * Class WhiteFrameServiceProvider
 * @package WhiteFrame\WhiteFrame
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
        /*
        $this->app->register(HelloquentServiceProvider::class);
        $this->app->register(HttpServiceProvider::class);
        $this->app->register(StatisticsServiceProvider::class);
        $this->app->register(DynatableServiceProvider::class);
        */
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