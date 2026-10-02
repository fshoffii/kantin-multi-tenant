<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Pelanggan']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => 'Pelanggan']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="antialiased">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body class="min-h-screen bg-zinc-50 text-zinc-900 dark:bg-zinc-950 dark:text-zinc-100">
    <div class="mx-auto flex min-h-screen w-full max-w-md flex-col">
        <header class="sticky top-0 z-10 flex min-h-14 items-center gap-2 border-b border-zinc-200 bg-white/90 px-4 backdrop-blur dark:border-zinc-800 dark:bg-zinc-900/90">
            <span class="text-base font-semibold"><?php echo e($title); ?></span>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($headerRight)): ?><div class="ms-auto"><?php echo e($headerRight); ?></div><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </header>
        <main class="flex-1 p-4"><?php echo e($slot); ?></main>
        <footer class="border-t border-zinc-200 p-4 text-center text-xs text-zinc-500 dark:border-zinc-800 dark:text-zinc-400">
            <?php echo e(config('app.name')); ?>

        </footer>
    </div>
    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>
</html>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/components/layouts/customer.blade.php ENDPATH**/ ?>