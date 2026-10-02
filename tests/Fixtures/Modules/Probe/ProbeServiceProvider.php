<?php

namespace Tests\Fixtures\Modules\Probe;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

final class ProbeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Livewire::addNamespace(
            'probe',
            __DIR__.'/resources/views',
            'Tests\\Fixtures\\Modules\\Probe',
        );
    }

    public function boot(): void
    {
        View::addNamespace('probe', __DIR__.'/resources/views');

        Route::middleware(['web', 'auth', 'verified', 'tenant'])
            ->prefix('tenant/{tenant:slug}')
            ->name('tenant.')
            ->group(function (): void {
                Route::get('/probe', fn () => view('probe::page', ['count' => 0]))->name('probe');
            });
    }
}
