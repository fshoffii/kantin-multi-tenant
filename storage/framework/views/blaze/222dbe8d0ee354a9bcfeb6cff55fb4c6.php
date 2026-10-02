<?php
if (!function_exists('__222dbe8d0ee354a9bcfeb6cff55fb4c6')):
function __222dbe8d0ee354a9bcfeb6cff55fb4c6($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'length' => null,
    'private' => false,
];
$length ??= $attributes['length'] ?? $__defaults['length']; unset($attributes['length']);
$private ??= $attributes['private'] ?? $__defaults['private']; unset($attributes['private']);
unset($__defaults);
?>

<?php
    $classes = Flux::classes()
        ->add('flex items-center gap-2 isolate w-fit')
        ->add('[&_[data-flux-input-group]]:w-auto')
?>

<?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php', $__blaze->compiledPath.'/09680cdce22283a53528a82035ebe22e.php'); ?>
<?php if (isset($__slots09680cdce22283a53528a82035ebe22e)) { $__slotsStack09680cdce22283a53528a82035ebe22e[] = $__slots09680cdce22283a53528a82035ebe22e; } ?>
<?php if (isset($__attrs09680cdce22283a53528a82035ebe22e)) { $__attrsStack09680cdce22283a53528a82035ebe22e[] = $__attrs09680cdce22283a53528a82035ebe22e; } ?>
<?php $__attrs09680cdce22283a53528a82035ebe22e = ['attributes' => $attributes]; ?>
<?php $__slots09680cdce22283a53528a82035ebe22e = []; ?>
<?php $__blaze->pushData($__attrs09680cdce22283a53528a82035ebe22e); ?>
<?php ob_start(); ?>
    <ui-otp
        <?php echo e($attributes->class($classes)); ?>

        data-flux-otp
        data-flux-control
        role="group"
        data-flux-input-aria-label="<?php echo e(__('Character {current} of {total}')); ?>"
    >
        <?php if($slot->isEmpty() && $length): ?>
            <?php for($i = 0; $i < $length; $i++): ?>
                <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/input.blade.php', $__blaze->compiledPath.'/14b009d46ea7d1bb98150fd8758b2ab9.php'); ?>
<?php $__blaze->pushData([]); ?>
<?php __14b009d46ea7d1bb98150fd8758b2ab9($__blaze, [], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
            <?php endfor; ?>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
    </ui-otp>
<?php $__slots09680cdce22283a53528a82035ebe22e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots09680cdce22283a53528a82035ebe22e); ?>
<?php __09680cdce22283a53528a82035ebe22e($__blaze, $__attrs09680cdce22283a53528a82035ebe22e, $__slots09680cdce22283a53528a82035ebe22e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack09680cdce22283a53528a82035ebe22e)) { $__slots09680cdce22283a53528a82035ebe22e = array_pop($__slotsStack09680cdce22283a53528a82035ebe22e); } ?>
<?php if (! empty($__attrsStack09680cdce22283a53528a82035ebe22e)) { $__attrs09680cdce22283a53528a82035ebe22e = array_pop($__attrsStack09680cdce22283a53528a82035ebe22e); } ?>
<?php $__blaze->popData(); ?><?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/otp/index.blade.php ENDPATH**/ ?>