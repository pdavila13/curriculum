<?php

namespace Scool\Curriculum\Providers;

use Acacha\Names\Providers\NamesServiceProvider;
use Acacha\Stateful\Providers\StatefulServiceProvider;
use Illuminate\Support\ServiceProvider;
use Scool\Curriculum\ScoolCurriculum;

class CurriculumServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (!defined('SCOOL_CURRICULUM_PATH')) {
            define('SCOOL_CURRICULUM_PATH', realpath(__DIR__.'/../../'));
        }

        $this->registerNamesServiceProvide();
        $this->registerStateFulServiceProvide();

        $this->app->bind(\Scool\Curriculum\Repositories\StudyRepository::class, \Scool\Curriculum\Repositories\StudyRepositoryEloquent::class);
        //:end-bindings:
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories();
        $this->defineRoutes();
    }

    /**
     * Define the AdminLTETemplate routes.
     */
    protected function defineRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $router = app('router');
            $router->group(['namespace' => 'Scool\Curriculum\Http\Controllers'], function () {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }

    /**
     * Migrations
     *
     * @return void
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Publish factory
     *
     * @return void
     */
    private function publishFactories()
    {
        $this->publishes(

            ScoolCurriculum::factories(), "scool_curriculum"
        );
    }

    /**
     *
     */
    protected function registerNamesServiceProvide()
    {
        $this->app->register(NamesServiceProvider::class);
    }

    /**
     Register acacha/names Service Provider
    */
    protected function registerStateFulServiceProvide()
    {
        $this->app->register(StatefulServiceProvider::class);
    }

    /**
     * Publish config
     */
    private function publishConfig()
    {
        $this->publishes(

            ScoolCurriculum::configs(), "scool_curriculum"
        );

        $this->mergeConfigFrom(
            SCOOL_CURRICULUM_PATH . '/config/curriculum.php', 'scool_curriculum'
        );
    }
}
