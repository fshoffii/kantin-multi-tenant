<?php # [BlazeFolded]:{flux::link}:{C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1786296215} ?>
<?php # [BlazeFolded]:{flux::link}:{C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/link.blade.php}:{1786296215} ?>
<?php if (isset($component)) { $__componentOriginaledca418180d3fbce3c5b29b5ac5de169 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaledca418180d3fbce3c5b29b5ac5de169 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::auth.split','data' => ['title' => __('Masuk')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::auth.split'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Masuk'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-2">
            <h2 class="text-2xl font-bold tracking-tight text-[#20242c]"><?php echo e(__('Masuk')); ?></h2>
            <p class="text-sm text-[#737373]"><?php echo e(__('Gunakan akun tenant atau pengelola Anda.')); ?></p>
        </div>

        <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'text-center','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal360dec750a5c22110ff2b6afe54f0581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal360dec750a5c22110ff2b6afe54f0581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.passkey-verify','data' => ['label' => __('Masuk dengan passkey'),'loadingLabel' => __('Memverifikasi...'),'separator' => __('Atau masuk dengan email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('passkey-verify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Masuk dengan passkey')),'loading-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Memverifikasi...')),'separator' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Atau masuk dengan email'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal360dec750a5c22110ff2b6afe54f0581)): ?>
<?php $attributes = $__attributesOriginal360dec750a5c22110ff2b6afe54f0581; ?>
<?php unset($__attributesOriginal360dec750a5c22110ff2b6afe54f0581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal360dec750a5c22110ff2b6afe54f0581)): ?>
<?php $component = $__componentOriginal360dec750a5c22110ff2b6afe54f0581; ?>
<?php unset($__componentOriginal360dec750a5c22110ff2b6afe54f0581); ?>
<?php endif; ?>

        <form method="POST" action="<?php echo e(route('login.store')); ?>" class="flex flex-col gap-5">
            <?php echo csrf_field(); ?>

            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/c1d50bca010dbbc95702a8856de8ce21.php'); ?>
<?php $__blaze->pushData(['name' => 'email','label' => __('Surel'),'value' => old('email'),'type' => 'email','required' => true,'autofocus' => true,'autocomplete' => 'email','placeholder' => 'nama@contoh.com']); ?>
<?php _c1d50bca010dbbc95702a8856de8ce21($__blaze, ['name' => 'email','label' => __('Surel'),'value' => old('email'),'type' => 'email','required' => true,'autofocus' => true,'autocomplete' => 'email','placeholder' => 'nama@contoh.com'], [], ['label', 'value', 'required', 'autofocus'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

            <div class="relative">
                <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/c1d50bca010dbbc95702a8856de8ce21.php'); ?>
<?php $__blaze->pushData(['name' => 'password','label' => __('Kata sandi'),'type' => 'password','required' => true,'autocomplete' => 'current-password','placeholder' => '••••••••','viewable' => true]); ?>
<?php _c1d50bca010dbbc95702a8856de8ce21($__blaze, ['name' => 'password','label' => __('Kata sandi'),'type' => 'password','required' => true,'autocomplete' => 'current-password','placeholder' => '••••••••','viewable' => true], [], ['label', 'required', 'viewable'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
            </div>

            <?php $__blaze->ensureRequired('C:\ServBay\www\kantin-multi-tenant\vendor\livewire\flux\src/../stubs/resources/views/flux/checkbox/index.blade.php', $__blaze->compiledPath.'/ecca8947400127c9e774c6497926c687.php'); ?>
<?php $__blaze->pushData(['name' => 'remember','label' => __('Ingat saya'),'checked' => old('remember')]); ?>
<?php _ecca8947400127c9e774c6497926c687($__blaze, ['name' => 'remember','label' => __('Ingat saya'),'checked' => old('remember')], [], ['label', 'checked'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

            <p class="text-xs leading-relaxed text-[#737373]">
                <?php echo e(__('Maksimal 5 percobaan masuk per menit. Sesi berakhir setelah :minutes menit tidak aktif.', ['minutes' => config('session.lifetime')])); ?>

            </p>

            <button
                type="submit"
                class="flex min-h-11 w-full items-center justify-center gap-2 bg-[#f12d12] px-4 text-sm font-semibold text-white transition hover:bg-[#d92810] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#f12d12] disabled:opacity-60"
                data-test="login-button"
            >
                <?php echo e(__('Masuk')); ?> <span aria-hidden="true">→</span>
            </button>
        </form>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('password.request')): ?>
            <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] w-fit text-sm font-semibold text-[#e92c13]" <?php if (($__blazeAttr = route('password.request')) !== false && !is_null($__blazeAttr)): ?>href="<?php echo e($__blazeAttr === true ? 'href' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?> wire:navigate="" data-flux-link ><?php ob_start(); ?>
                <?php echo e(__('Lupa kata sandi?')); ?>

            <?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Route::has('register')): ?>
            <p class="text-sm text-[#737373]">
                <?php echo e(__('Belum punya akun?')); ?>

                <?php ob_start(); ?><a class="inline font-medium underline-offset-[6px] hover:decoration-current underline [[data-color]&gt;&amp;]:text-inherit [[data-color]&gt;&amp;]:decoration-current/20 dark:[[data-color]&gt;&amp;]:decoration-current/50 [[data-color]&gt;&amp;]:hover:decoration-current text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)] font-semibold text-[#e92c13]" <?php if (($__blazeAttr = route('register')) !== false && !is_null($__blazeAttr)): ?>href="<?php echo e($__blazeAttr === true ? 'href' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?> wire:navigate="" data-flux-link ><?php ob_start(); ?><?php echo e(__('Daftar')); ?><?php echo trim(ob_get_clean()); ?></a><?php echo ltrim(ob_get_clean()); ?>
            </p>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaledca418180d3fbce3c5b29b5ac5de169)): ?>
<?php $attributes = $__attributesOriginaledca418180d3fbce3c5b29b5ac5de169; ?>
<?php unset($__attributesOriginaledca418180d3fbce3c5b29b5ac5de169); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaledca418180d3fbce3c5b29b5ac5de169)): ?>
<?php $component = $__componentOriginaledca418180d3fbce3c5b29b5ac5de169; ?>
<?php unset($__componentOriginaledca418180d3fbce3c5b29b5ac5de169); ?>
<?php endif; ?>
<?php /**PATH C:\ServBay\www\kantin-multi-tenant\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>