<?php
if (!function_exists('__09680cdce22283a53528a82035ebe22e')):
function __09680cdce22283a53528a82035ebe22e($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/acc2d463dcf81a10136d53f4b72a0b94.php'); ?>
<?php if (isset($__slotsacc2d463dcf81a10136d53f4b72a0b94)) { $__slotsStackacc2d463dcf81a10136d53f4b72a0b94[] = $__slotsacc2d463dcf81a10136d53f4b72a0b94; } ?>
<?php if (isset($__attrsacc2d463dcf81a10136d53f4b72a0b94)) { $__attrsStackacc2d463dcf81a10136d53f4b72a0b94[] = $__attrsacc2d463dcf81a10136d53f4b72a0b94; } ?>
<?php $__attrsacc2d463dcf81a10136d53f4b72a0b94 = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsacc2d463dcf81a10136d53f4b72a0b94 = []; ?>
<?php $__blaze->pushData($__attrsacc2d463dcf81a10136d53f4b72a0b94); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/932ac694cafbc856952d829fe8f15d04.php'); ?>
<?php if (isset($__slots932ac694cafbc856952d829fe8f15d04)) { $__slotsStack932ac694cafbc856952d829fe8f15d04[] = $__slots932ac694cafbc856952d829fe8f15d04; } ?>
<?php if (isset($__attrs932ac694cafbc856952d829fe8f15d04)) { $__attrsStack932ac694cafbc856952d829fe8f15d04[] = $__attrs932ac694cafbc856952d829fe8f15d04; } ?>
<?php $__attrs932ac694cafbc856952d829fe8f15d04 = ['attributes' => $labelAttributes]; ?>
<?php $__slots932ac694cafbc856952d829fe8f15d04 = []; ?>
<?php $__blaze->pushData($__attrs932ac694cafbc856952d829fe8f15d04); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots932ac694cafbc856952d829fe8f15d04['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots932ac694cafbc856952d829fe8f15d04); ?>
<?php __932ac694cafbc856952d829fe8f15d04($__blaze, $__attrs932ac694cafbc856952d829fe8f15d04, $__slots932ac694cafbc856952d829fe8f15d04, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack932ac694cafbc856952d829fe8f15d04)) { $__slots932ac694cafbc856952d829fe8f15d04 = array_pop($__slotsStack932ac694cafbc856952d829fe8f15d04); } ?>
<?php if (! empty($__attrsStack932ac694cafbc856952d829fe8f15d04)) { $__attrs932ac694cafbc856952d829fe8f15d04 = array_pop($__attrsStack932ac694cafbc856952d829fe8f15d04); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/266928b837ed5f950ce45cd05fa7af17.php'); ?>
<?php if (isset($__slots266928b837ed5f950ce45cd05fa7af17)) { $__slotsStack266928b837ed5f950ce45cd05fa7af17[] = $__slots266928b837ed5f950ce45cd05fa7af17; } ?>
<?php if (isset($__attrs266928b837ed5f950ce45cd05fa7af17)) { $__attrsStack266928b837ed5f950ce45cd05fa7af17[] = $__attrs266928b837ed5f950ce45cd05fa7af17; } ?>
<?php $__attrs266928b837ed5f950ce45cd05fa7af17 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots266928b837ed5f950ce45cd05fa7af17 = []; ?>
<?php $__blaze->pushData($__attrs266928b837ed5f950ce45cd05fa7af17); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots266928b837ed5f950ce45cd05fa7af17['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots266928b837ed5f950ce45cd05fa7af17); ?>
<?php __266928b837ed5f950ce45cd05fa7af17($__blaze, $__attrs266928b837ed5f950ce45cd05fa7af17, $__slots266928b837ed5f950ce45cd05fa7af17, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack266928b837ed5f950ce45cd05fa7af17)) { $__slots266928b837ed5f950ce45cd05fa7af17 = array_pop($__slotsStack266928b837ed5f950ce45cd05fa7af17); } ?>
<?php if (! empty($__attrsStack266928b837ed5f950ce45cd05fa7af17)) { $__attrs266928b837ed5f950ce45cd05fa7af17 = array_pop($__attrsStack266928b837ed5f950ce45cd05fa7af17); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        [STARTCOMPILEDUNBLAZE:isrCk0hdkU]<?php \Livewire\Blaze\Unblaze::storeScope("isrCk0hdkU", scope: ['attributes' => $errorAttributes->getAttributes()]) ?>[ENDCOMPILEDUNBLAZE:isrCk0hdkU]

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/266928b837ed5f950ce45cd05fa7af17.php'); ?>
<?php if (isset($__slots266928b837ed5f950ce45cd05fa7af17)) { $__slotsStack266928b837ed5f950ce45cd05fa7af17[] = $__slots266928b837ed5f950ce45cd05fa7af17; } ?>
<?php if (isset($__attrs266928b837ed5f950ce45cd05fa7af17)) { $__attrsStack266928b837ed5f950ce45cd05fa7af17[] = $__attrs266928b837ed5f950ce45cd05fa7af17; } ?>
<?php $__attrs266928b837ed5f950ce45cd05fa7af17 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots266928b837ed5f950ce45cd05fa7af17 = []; ?>
<?php $__blaze->pushData($__attrs266928b837ed5f950ce45cd05fa7af17); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots266928b837ed5f950ce45cd05fa7af17['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots266928b837ed5f950ce45cd05fa7af17); ?>
<?php __266928b837ed5f950ce45cd05fa7af17($__blaze, $__attrs266928b837ed5f950ce45cd05fa7af17, $__slots266928b837ed5f950ce45cd05fa7af17, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack266928b837ed5f950ce45cd05fa7af17)) { $__slots266928b837ed5f950ce45cd05fa7af17 = array_pop($__slotsStack266928b837ed5f950ce45cd05fa7af17); } ?>
<?php if (! empty($__attrsStack266928b837ed5f950ce45cd05fa7af17)) { $__attrs266928b837ed5f950ce45cd05fa7af17 = array_pop($__attrsStack266928b837ed5f950ce45cd05fa7af17); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsacc2d463dcf81a10136d53f4b72a0b94['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsacc2d463dcf81a10136d53f4b72a0b94); ?>
<?php __acc2d463dcf81a10136d53f4b72a0b94($__blaze, $__attrsacc2d463dcf81a10136d53f4b72a0b94, $__slotsacc2d463dcf81a10136d53f4b72a0b94, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackacc2d463dcf81a10136d53f4b72a0b94)) { $__slotsacc2d463dcf81a10136d53f4b72a0b94 = array_pop($__slotsStackacc2d463dcf81a10136d53f4b72a0b94); } ?>
<?php if (! empty($__attrsStackacc2d463dcf81a10136d53f4b72a0b94)) { $__attrsacc2d463dcf81a10136d53f4b72a0b94 = array_pop($__attrsStackacc2d463dcf81a10136d53f4b72a0b94); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>