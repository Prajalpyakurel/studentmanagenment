<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\CourseBooking;

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
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $userBookings = CourseBooking::with('course')
                    ->where('user_id', Auth::id())
                    ->get();
            } else {
                $userBookings = collect();
            }

            $view->with('userBookings', $userBookings);
        });
    }

}
