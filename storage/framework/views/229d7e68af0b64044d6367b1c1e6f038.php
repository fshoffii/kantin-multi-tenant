<?php
use App\Models\UserCanteenRole;
use App\Models\Withdrawal;
use App\Modules\Payments\Exceptions\WithdrawalException;
use App\Modules\Payments\Services\WithdrawalService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;
?>

<div class="space-y-4">
    <?php ($rupiah = fn (int $n) => 'Rp '.number_format($n, 0, ',', '.')); ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="rounded-lg bg-red-100 px-3 py-2 text-sm text-red-800 dark:bg-red-900/40 dark:text-red-300"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="overflow-x-auto rounded-2xl border border-zinc-200 dark:border-zinc-800">
        <table class="w-full min-w-[36rem] text-left text-sm">
            <thead class="bg-zinc-100 text-zinc-600 dark:bg-zinc-800 dark:text-zinc-300">
                <tr><th class="px-4 py-2">Tenant</th><th class="px-4 py-2">Nominal</th><th class="px-4 py-2 text-right">Aksi</th></tr>
            </thead>
            <tbody>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $this->pending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <tr <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'wd-'.e($withdrawal->id).''; ?>wire:key="wd-<?php echo e($withdrawal->id); ?>" class="border-t border-zinc-200 dark:border-zinc-800">
                        <td class="px-4 py-3"><?php echo e($withdrawal->tenant->display_name); ?></td>
                        <td class="px-4 py-3 font-semibold"><?php echo e($rupiah((int) $withdrawal->amount)); ?></td>
                        <td class="px-4 py-3 text-right">
                            <button type="button" wire:click="approve(<?php echo e($withdrawal->id); ?>)" class="me-2 text-sm font-medium text-green-700 underline dark:text-green-400">Setujui</button>
                            <button type="button" wire:click="reject(<?php echo e($withdrawal->id); ?>)" class="text-sm font-medium text-red-600 underline">Tolak</button>
                        </td>
                    </tr>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    <tr><td colspan="3" class="px-4 py-4 text-zinc-400">Tidak ada penarikan menunggu tinjauan.</td></tr>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </tbody>
        </table>
    </div>
</div><?php /**PATH C:\ServBay\www\kantin-multi-tenant\storage\framework\views/livewire/views/4f5a1359.blade.php ENDPATH**/ ?>