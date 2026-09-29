<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status' => 'default']));

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

foreach (array_filter((['status' => 'default']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
$map = [
    'active' => 'bg-green-100 text-green-800 dark:bg-green-900/40 dark:text-green-300',
    'pending' => 'bg-amber-100 text-amber-800 dark:bg-amber-900/40 dark:text-amber-300',
    'suspended' => 'bg-red-100 text-red-800 dark:bg-red-900/40 dark:text-red-300',
    'default' => 'bg-zinc-100 text-zinc-700 dark:bg-zinc-800 dark:text-zinc-300',
];
?>
<span <?php echo e($attributes->class(['inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium', $map[$status] ?? $map['default']])); ?>><?php echo e($slot); ?></span>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/components/status-badge.blade.php ENDPATH**/ ?>