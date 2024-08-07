<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider {
    public function register(): void {
        //
    }

    public function boot(): void {
        RedirectIfAuthenticated::redirectUsing(fn () => route('dashboard'));
    }
}
