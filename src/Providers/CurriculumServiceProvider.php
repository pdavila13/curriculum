<?php

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
            [
                __DIR__.'/../../database/factories/StudyFactory.php' =>
                    database_path() . '/factories/StudyFactory.php'
            ], "scool_curriculum"
        );
    }
}