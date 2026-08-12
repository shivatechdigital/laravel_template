<?php

namespace App\Providers;

use App\Models\SocialLink;
use Illuminate\Support\Facades\Schema;
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
        View::composer('*', function ($view) {
            if (!Schema::hasTable('social_links')) {
                $view->with('globalSocialLinks', collect());
                return;
            }

            $links = SocialLink::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            $view->with('globalSocialLinks', $links);
        });
    }
}
