<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Laravel\Fortify\Contracts\LoginViewResponse;
use App\Http\Responses\LoginViewResponse as CustomLoginViewResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(LoginViewResponse::class, CustomLoginViewResponse::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('login', function ($request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        RateLimiter::for('two-factor', function ($request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Blade::if('promo', function (string $key) {
            $promo = config("site.promotions.$key");
            if (!$promo || empty($promo['enabled'])) return false;
            try {
                $ends = Carbon::parse($promo['ends_at']);
            } catch (\Throwable $e) {
                return (bool) $promo['enabled'];
            }
            return now()->lte($ends);
        });
    }
}
