<?php

namespace Scool\Curriculum\Providers;

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

            ScoolCurriculum::factories(),"scool_curriculum"
        );
    }

    /**
     * Publish config
     */
    private function publishConfig()
    {
        $this->publishes(

            ScoolCurriculum::configs(),"scool_curriculum"
        );

        $this->mergeConfigFrom(
            SCOOL_CURRICULUM_PATH . '/config/curriculum.php', 'scool_curriculum'
        );
    }

}