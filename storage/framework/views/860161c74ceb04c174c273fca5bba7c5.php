<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

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

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/bb52de50346d085083325391093c1525.php'); ?>
<?php if (isset($__slotsbb52de50346d085083325391093c1525)) { $__slotsStackbb52de50346d085083325391093c1525[] = $__slotsbb52de50346d085083325391093c1525; } ?>
<?php if (isset($__attrsbb52de50346d085083325391093c1525)) { $__attrsStackbb52de50346d085083325391093c1525[] = $__attrsbb52de50346d085083325391093c1525; } ?>
<?php $__attrsbb52de50346d085083325391093c1525 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slotsbb52de50346d085083325391093c1525 = []; ?>
<?php $__blaze->pushData($__attrsbb52de50346d085083325391093c1525); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slotsbb52de50346d085083325391093c1525['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slotsbb52de50346d085083325391093c1525['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsbb52de50346d085083325391093c1525); ?>
<?php _bb52de50346d085083325391093c1525($__blaze, $__attrsbb52de50346d085083325391093c1525, $__slotsbb52de50346d085083325391093c1525, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackbb52de50346d085083325391093c1525)) { $__slotsbb52de50346d085083325391093c1525 = array_pop($__slotsStackbb52de50346d085083325391093c1525); } ?>
<?php if (! empty($__attrsStackbb52de50346d085083325391093c1525)) { $__attrsbb52de50346d085083325391093c1525 = array_pop($__attrsStackbb52de50346d085083325391093c1525); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/819d1d405d8437667e95386c53e85a67.php'); ?>
<?php if (isset($__slots819d1d405d8437667e95386c53e85a67)) { $__slotsStack819d1d405d8437667e95386c53e85a67[] = $__slots819d1d405d8437667e95386c53e85a67; } ?>
<?php if (isset($__attrs819d1d405d8437667e95386c53e85a67)) { $__attrsStack819d1d405d8437667e95386c53e85a67[] = $__attrs819d1d405d8437667e95386c53e85a67; } ?>
<?php $__attrs819d1d405d8437667e95386c53e85a67 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots819d1d405d8437667e95386c53e85a67 = []; ?>
<?php $__blaze->pushData($__attrs819d1d405d8437667e95386c53e85a67); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots819d1d405d8437667e95386c53e85a67['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots819d1d405d8437667e95386c53e85a67['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots819d1d405d8437667e95386c53e85a67); ?>
<?php _819d1d405d8437667e95386c53e85a67($__blaze, $__attrs819d1d405d8437667e95386c53e85a67, $__slots819d1d405d8437667e95386c53e85a67, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack819d1d405d8437667e95386c53e85a67)) { $__slots819d1d405d8437667e95386c53e85a67 = array_pop($__slotsStack819d1d405d8437667e95386c53e85a67); } ?>
<?php if (! empty($__attrsStack819d1d405d8437667e95386c53e85a67)) { $__attrs819d1d405d8437667e95386c53e85a67 = array_pop($__attrsStack819d1d405d8437667e95386c53e85a67); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/components/app-logo.blade.php ENDPATH**/ ?>