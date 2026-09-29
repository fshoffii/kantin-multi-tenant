<?php

namespace App\Models\Concerns;

use App\Models\Scopes\TenantScope;
use App\Support\Tenancy\TenantContext;
use Illuminate\Database\Eloquent\Model;

/**
 * Model tenant-owned: menambahkan global scope tenant_id dan mengisi tenant_id saat create
 * dari TenantContext aktif. Auto-fill membantu konsistensi, tetapi policy + composite FK
 * database tetap wajib (pertahanan berlapis). tenant_id TIDAK boleh mass-assignable.
 *
 * Catatan: scope hanya memfilter saat context terisi. Route internal SELALU mengisi context
 * (SetTenantContext); alur lintas-tenant yang sah memakai withoutGlobalScope('tenant') + filter
 * canteen/status eksplisit. Write tanpa context gagal via NOT NULL tenant_id di DB (fail-closed).
 *
 * @mixin Model
 *
 * @method static mixed addGlobalScope(\Illuminate\Database\Eloquent\Scope<Model>|\Closure|string $scope, \Illuminate\Database\Eloquent\Scope<Model>|\Closure|null $implementation = null)
 * @method static void creating(callable $callback)
 */
trait BelongsToTenant
{
    public static function bootBelongsToTenant(): void
    {
        static::addGlobalScope('tenant', new TenantScope);

        static::creating(function (Model $model): void {
            $context = app(TenantContext::class);
            if ($context->has() && empty($model->getAttribute('tenant_id'))) {
                $model->setAttribute('tenant_id', $context->id());
            }
        });
    }
}
