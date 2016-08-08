<?php namespace Econtract\Toolbox;


use Illuminate\Support\ServiceProvider;

class ToolboxServiceProvider extends ServiceProvider {

    protected $defer = false;


    /**
     * @return void
     */
    public function register()
    {
        $this->app['Toolbox'] = $this->app->share(
            function($app)
            {
                return new ToolboxService();
            }
        );
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
