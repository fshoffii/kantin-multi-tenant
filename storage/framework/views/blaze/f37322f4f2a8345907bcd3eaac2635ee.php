<?php
if (!function_exists('__f37322f4f2a8345907bcd3eaac2635ee')):
function __f37322f4f2a8345907bcd3eaac2635ee($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name' => null,
    'variant' => null,
    'size' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$variant ??= $attributes['variant'] ?? $__defaults['variant']; unset($attributes['variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
// We only want to show the name attribute on the checkbox if it has been set
// manually, but not if it has been set from the wire:model attribute...
$showName = isset($name);

if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('block flex p-1')
    ->add('rounded-lg bg-zinc-800/5 dark:bg-white/10')
    ->add($size === 'sm' ? 'h-8 py-[3px] px-[3px]' : 'h-10 p-1')
    ->add($size === 'sm' ? '-my-px h-[calc(2rem+2px)]' : '')
    ;
?>

<?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/09680cdce22283a53528a82035ebe22e.php'); ?>
<?php if (isset($__slots09680cdce22283a53528a82035ebe22e)) { $__slotsStack09680cdce22283a53528a82035ebe22e[] = $__slots09680cdce22283a53528a82035ebe22e; } ?>
<?php if (isset($__attrs09680cdce22283a53528a82035ebe22e)) { $__attrsStack09680cdce22283a53528a82035ebe22e[] = $__attrs09680cdce22283a53528a82035ebe22e; } ?>
<?php $__attrs09680cdce22283a53528a82035ebe22e = ['attributes' => $attributes]; ?>
<?php $__slots09680cdce22283a53528a82035ebe22e = []; ?>
<?php $__blaze->pushData($__attrs09680cdce22283a53528a82035ebe22e); ?>
<?php ob_start(); ?>
    <ui-radio-group <?php echo e($attributes->class($classes)); ?> <?php if($showName): ?> name="<?php echo e($name); ?>" <?php endif; ?> data-flux-radio-group-segmented>
        <?php echo e($slot); ?>

    </ui-radio-group>
<?php $__slots09680cdce22283a53528a82035ebe22e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots09680cdce22283a53528a82035ebe22e); ?>
<?php __09680cdce22283a53528a82035ebe22e($__blaze, $__attrs09680cdce22283a53528a82035ebe22e, $__slots09680cdce22283a53528a82035ebe22e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack09680cdce22283a53528a82035ebe22e)) { $__slots09680cdce22283a53528a82035ebe22e = array_pop($__slotsStack09680cdce22283a53528a82035ebe22e); } ?>
<?php if (! empty($__attrsStack09680cdce22283a53528a82035ebe22e)) { $__attrs09680cdce22283a53528a82035ebe22e = array_pop($__attrsStack09680cdce22283a53528a82035ebe22e); } ?>
<?php $__blaze->popData(); ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/radio/group/variants/segmented.blade.php ENDPATH**/ ?>