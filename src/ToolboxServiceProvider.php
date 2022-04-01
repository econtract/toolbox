<?php namespace Econtract\Toolbox;

use Illuminate\Support\ServiceProvider;

class ToolboxServiceProvider extends ServiceProvider {

    protected $defer = false;

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ToolboxService::class,
            function($app) {
                return new ToolboxService( $_SERVER[ 'TOOLBOX_API_ENDPOINT' ], $_SERVER[ 'TOOLBOX_API_KEY' ] );
            }
        );

        $this->app->alias(ToolboxService::class, 'Toolbox');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Toolbox');
    }

    public function boot()
    {
        // ...
    }

}
