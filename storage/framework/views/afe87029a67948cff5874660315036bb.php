<?php
use App\Models\Order;
use App\Modules\Ordering\Services\ResolveTrackedOrder;
use App\Modules\Payments\Contracts\PaymentGateway;
use App\Modules\Payments\Exceptions\PaymentException;
use App\Modules\Payments\Services\PaymentService;
use Livewire\Attributes\Computed;
use Livewire\Component;
?>

<div class="rounded-2xl border border-zinc-200 p-4 dark:border-zinc-800" aria-label="Pembayaran">
    <?php ($order = $this->order); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! $order): ?>
        <?php if (isset($component)) { $__componentOriginal074a021b9d42f490272b5eefda63257c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal074a021b9d42f490272b5eefda63257c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-state','data' => ['title' => 'Pesanan tidak ditemukan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Pesanan tidak ditemukan']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal074a021b9d42f490272b5eefda63257c)): ?>
<?php $attributes = $__attributesOriginal074a021b9d42f490272b5eefda63257c; ?>
<?php unset($__attributesOriginal074a021b9d42f490272b5eefda63257c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal074a021b9d42f490272b5eefda63257c)): ?>
<?php $component = $__componentOriginal074a021b9d42f490272b5eefda63257c; ?>
<?php unset($__componentOriginal074a021b9d42f490272b5eefda63257c); ?>
<?php endif; ?>
    <?php else: ?>
        <?php ($payment = $order->payment); ?>

        <h2 class="mb-3 font-semibold">Pembayaran</h2>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="mb-3 rounded-lg bg-red-100 px-3 py-2 text-sm text-red-800 dark:bg-red-900/40 dark:text-red-300"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($order->status === 'paid'): ?>
            <div class="rounded-xl bg-green-100 px-4 py-3 text-sm font-medium text-green-800 dark:bg-green-900/40 dark:text-green-300">
                Pembayaran berhasil. Terima kasih!
            </div>
        <?php elseif($payment === null): ?>
            <p class="text-sm text-zinc-500">Total tagihan: <span class="font-semibold">Rp <?php echo e(number_format($order->grand_total_amount, 0, ',', '.')); ?></span></p>
            <button type="button" wire:click="initiate" wire:loading.attr="disabled"
                class="mt-3 min-h-11 w-full rounded-xl bg-zinc-900 font-medium text-white disabled:opacity-50 dark:bg-white dark:text-zinc-900">
                Bayar dengan QRIS
            </button>
        <?php else: ?>
            <?php ($attempt = $payment->latestAttempt); ?>
            <p class="text-sm text-zinc-500">Pindai QRIS berikut (nominal Rp <?php echo e(number_format($payment->amount, 0, ',', '.')); ?>):</p>
            <div class="mt-2 rounded-xl border border-dashed border-zinc-300 p-3 dark:border-zinc-700">
                <p class="break-all font-mono text-[11px] leading-relaxed text-zinc-600 dark:text-zinc-300"><?php echo e($attempt?->qris_payload); ?></p>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($attempt?->expires_at): ?>
                <p class="mt-1 text-xs text-zinc-500">Berlaku hingga <?php echo e($attempt->expires_at->format('H:i')); ?>.</p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($this->sandbox): ?>
                <button type="button" wire:click="simulatePay" wire:loading.attr="disabled"
                    class="mt-3 min-h-11 w-full rounded-xl border border-zinc-300 font-medium disabled:opacity-50 dark:border-zinc-600">
                    Simulasi Bayar (sandbox)
                </button>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div><?php /**PATH C:\ServBay\www\kantin-multi-tenant\storage\framework\views/livewire/views/3ed87c6c.blade.php ENDPATH**/ ?>