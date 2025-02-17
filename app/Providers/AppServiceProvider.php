<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\OurTeam;
use App\Models\Service;
use App\Observers\BlogObserver;
use App\Observers\CourseObserver;
use App\Observers\OurTeamObserver;
use App\Observers\ServiceObserver;
use OpenAdmin\Admin\Config\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Course::observe(CourseObserver::class);

        View::share('coursesForHeader', Course::all());
        View::share('contactDetails', Contact::first());

        Config::load();
    }
}
