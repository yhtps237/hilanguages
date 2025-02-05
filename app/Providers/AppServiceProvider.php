<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\OurTeam;
use App\Models\Service;
use App\Observers\BlogObserver;
use App\Observers\OurTeamObserver;
use App\Observers\ServiceObserver;
use OpenAdmin\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blog::observe(BlogObserver::class);
        Service::observe(ServiceObserver::class);
        OurTeam::observe(OurTeamObserver::class);


        Config::load();
    }
}
