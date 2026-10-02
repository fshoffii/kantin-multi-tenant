<?php if (isset($component)) { $__componentOriginal713903a1ae72dd2a9e62629038144506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal713903a1ae72dd2a9e62629038144506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.customer','data' => ['title' => 'Katalog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.customer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Katalog')]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <div class="lg:col-span-2">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('menu-catalog', ['canteen-slug' => $canteen]);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-192945894-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
        </div>
        <div class="lg:sticky lg:top-4 lg:self-start">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('cart', ['canteen-slug' => $canteen]);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-192945894-1', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal713903a1ae72dd2a9e62629038144506)): ?>
<?php $attributes = $__attributesOriginal713903a1ae72dd2a9e62629038144506; ?>
<?php unset($__attributesOriginal713903a1ae72dd2a9e62629038144506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal713903a1ae72dd2a9e62629038144506)): ?>
<?php $component = $__componentOriginal713903a1ae72dd2a9e62629038144506; ?>
<?php unset($__componentOriginal713903a1ae72dd2a9e62629038144506); ?>
<?php endif; ?>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/customer/home.blade.php ENDPATH**/ ?>