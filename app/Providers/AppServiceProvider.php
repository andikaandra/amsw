<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // first paramater is the interface
        // second parameter is the implementation
        $this->app->bind(
            'App\Contracts\Repositories\IParticipantRepository',
            'App\Repositories\ParticipantRepository'
        );

        $this->app->bind(
            'App\Contracts\IParticipantManagement',
            'App\Services\ParticipantManagement'
        );

        $this->app->bind(
            'App\Contracts\Repositories\IParticipantRegistrationRepository',
            'App\Repositories\ParticipantRegistrationRepository'
        );

        $this->app->bind(
            'App\Contracts\IParticipantRegistrationManagement',
            'App\Services\ParticipantRegistrationManagement'
        );

        $this->app->bind(
            'App\Contracts\Repositories\ICompsRepository',
            'App\Repositories\CompetitionManagementRepository'
        );

        $this->app->bind(
            'App\Contracts\ICompetitionManagement',
            'App\Services\CompetitionManagement'
        );

        $this->app->bind(
            'App\Contracts\Repositories\ISubmissionRepository',
            'App\Repositories\SubmissionRepository'
        );

        $this->app->bind(
            'App\Contracts\ISubmissionManagement',
            'App\Services\SubmissionManagement'
        );
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

}
