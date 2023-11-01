<?php

namespace App\Providers;

use App\Nova\Metrics\AmountCalcuations;
use App\Nova\Metrics\RequestEnrollmentPerDay;
use App\Nova\Metrics\PriceOrders;
use App\Nova\Metrics\CoursesPerCategory;
use App\Nova\Metrics\TotalContacts;
use App\Nova\Metrics\TotalCourses;
use App\Nova\Metrics\TotalPosts;
use App\Nova\Metrics\TotalUsers;
use App\Nova\Metrics\UsersPerDay;
use App\Nova\Metrics\WaitingQuestions;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            if($user->email == "ssa4141@naver.com")
                return true;

            return $user->accepted;
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            // new Help,
            new TotalPosts(),
            new TotalUsers(),
            new TotalCourses(),
            (new CoursesPerCategory())->width("2/3"),
            new TotalContacts(),
            (new RequestEnrollmentPerDay())->width("full")
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
