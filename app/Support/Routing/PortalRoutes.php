<?php

namespace App\Support\Routing;

use Illuminate\Support\Facades\Route;

final class PortalRoutes
{
    /**
     * Portal operator tenant (internal). Resolver SetTenantContext (alias `tenant`) mengikat
     * {tenant:slug}, memeriksa membership + status, lalu mengisi TenantContext; scopeBindings
     * mengunci resource anak di bawah tenant induk (Modul 4).
     */
    public static function tenant(callable $routes): void
    {
        Route::middleware(['web', 'tenant', 'auth', 'verified'])
            ->prefix('tenant/{tenant:slug}')
            ->as('tenant.')
            ->scopeBindings()
            ->group($routes);
    }

    /**
     * Portal admin plat    form (internal).
     */
    public static function customer(callable $routes): void
    {
        Route::middleware(['web'])
            ->group($routes);
    }
}