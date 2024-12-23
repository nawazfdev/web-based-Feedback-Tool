<?php

namespace App\Providers;

use App\Models\Feedback;
use App\Policies\FeedbackPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
        Gate::policy(Feedback::class,FeedbackPolicy::class);
    }
}
