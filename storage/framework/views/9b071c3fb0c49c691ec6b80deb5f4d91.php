<?php
if (!function_exists('_9b071c3fb0c49c691ec6b80deb5f4d91')):
function _9b071c3fb0c49c691ec6b80deb5f4d91($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
$__defaults = [
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/efd2ed7d1dbd15ead9e0b407934b8c9d.php'); ?>
<?php if (isset($__slotsefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d[] = $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d; } ?>
<?php if (isset($__attrsefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d[] = $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d; } ?>
<?php $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d = ['kbd' => $kbd]; ?>
<?php $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d = []; ?>
<?php $__blaze->pushData($__attrsefd2ed7d1dbd15ead9e0b407934b8c9d); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsefd2ed7d1dbd15ead9e0b407934b8c9d); ?>
<?php _efd2ed7d1dbd15ead9e0b407934b8c9d($__blaze, $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d, $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d = array_pop($__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d); } ?>
<?php if (! empty($__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d = array_pop($__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/efd2ed7d1dbd15ead9e0b407934b8c9d.php'); ?>
<?php if (isset($__slotsefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d[] = $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d; } ?>
<?php if (isset($__attrsefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d[] = $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d; } ?>
<?php $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d = ['kbd' => $kbd]; ?>
<?php $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d = []; ?>
<?php $__blaze->pushData($__attrsefd2ed7d1dbd15ead9e0b407934b8c9d); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsefd2ed7d1dbd15ead9e0b407934b8c9d); ?>
<?php _efd2ed7d1dbd15ead9e0b407934b8c9d($__blaze, $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d, $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__slotsefd2ed7d1dbd15ead9e0b407934b8c9d = array_pop($__slotsStackefd2ed7d1dbd15ead9e0b407934b8c9d); } ?>
<?php if (! empty($__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d)) { $__attrsefd2ed7d1dbd15ead9e0b407934b8c9d = array_pop($__attrsStackefd2ed7d1dbd15ead9e0b407934b8c9d); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php ENDPATH**/ ?>