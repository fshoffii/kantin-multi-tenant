<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Tenant']));

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

foreach (array_filter((['title' => 'Tenant']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
    <div x-data="{ open: false }" class="flex min-h-screen">
        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-20 w-64 transform border-r border-zinc-200 bg-white p-4 transition-transform duration-200 lg:static lg:translate-x-0 dark:border-zinc-800 dark:bg-zinc-900">
            <div class="mb-6 text-lg font-semibold">Tenant</div>
            <nav class="flex flex-col gap-1 text-sm">
                <span class="rounded-lg bg-zinc-100 px-3 py-2 font-medium dark:bg-zinc-800">Dashboard</span>
                <span class="px-3 py-2 text-zinc-400">Katalog (Modul 7)</span>
                <span class="px-3 py-2 text-zinc-400">Pesanan / KDS (Modul 12)</span>
            </nav>
        </aside>
        <div class="flex min-w-0 flex-1 flex-col">
            <header class="flex min-h-14 items-center gap-3 border-b border-zinc-200 bg-white px-4 dark:border-zinc-800 dark:bg-zinc-900">
                <button type="button" @click="open = !open" class="inline-flex min-h-11 min-w-11 items-center justify-center rounded-lg lg:hidden" aria-label="Toggle sidebar">☰</button>
                <span class="font-semibold"><?php echo e($title); ?></span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($headerRight)): ?><div class="ms-auto"><?php echo e($headerRight); ?></div><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </header>
            <main class="flex-1 p-6"><?php echo e($slot); ?></main>
        </div>
    </div>
    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>
</html>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/components/layouts/tenant.blade.php ENDPATH**/ ?>