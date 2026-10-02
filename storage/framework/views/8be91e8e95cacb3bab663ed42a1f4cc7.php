<?php
if (!function_exists('_8be91e8e95cacb3bab663ed42a1f4cc7')):
function _8be91e8e95cacb3bab663ed42a1f4cc7($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/6770390420ab94ab071a86c04a8590b8.php'); ?>
<?php if (isset($__slots6770390420ab94ab071a86c04a8590b8)) { $__slotsStack6770390420ab94ab071a86c04a8590b8[] = $__slots6770390420ab94ab071a86c04a8590b8; } ?>
<?php if (isset($__attrs6770390420ab94ab071a86c04a8590b8)) { $__attrsStack6770390420ab94ab071a86c04a8590b8[] = $__attrs6770390420ab94ab071a86c04a8590b8; } ?>
<?php $__attrs6770390420ab94ab071a86c04a8590b8 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots6770390420ab94ab071a86c04a8590b8 = []; ?>
<?php $__blaze->pushData($__attrs6770390420ab94ab071a86c04a8590b8); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/ad96ed966782e6b0f8ba1a2fe7b95637.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _ad96ed966782e6b0f8ba1a2fe7b95637($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/f30b9f1d5a905d75863b72dd312ee734.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _f30b9f1d5a905d75863b72dd312ee734($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots6770390420ab94ab071a86c04a8590b8['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots6770390420ab94ab071a86c04a8590b8); ?>
<?php _6770390420ab94ab071a86c04a8590b8($__blaze, $__attrs6770390420ab94ab071a86c04a8590b8, $__slots6770390420ab94ab071a86c04a8590b8, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack6770390420ab94ab071a86c04a8590b8)) { $__slots6770390420ab94ab071a86c04a8590b8 = array_pop($__slotsStack6770390420ab94ab071a86c04a8590b8); } ?>
<?php if (! empty($__attrsStack6770390420ab94ab071a86c04a8590b8)) { $__attrs6770390420ab94ab071a86c04a8590b8 = array_pop($__attrsStack6770390420ab94ab071a86c04a8590b8); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>