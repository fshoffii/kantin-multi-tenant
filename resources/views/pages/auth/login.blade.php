<x-layouts::auth.split :title="__('Masuk')">
    <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-2">
            <h2 class="text-2xl font-bold tracking-tight text-[#20242c]">{{ __('Masuk') }}</h2>
            <p class="text-sm text-[#737373]">{{ __('Gunakan akun tenant atau pengelola Anda.') }}</p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <x-passkey-verify
            :label="__('Masuk dengan passkey')"
            :loading-label="__('Memverifikasi...')"
            :separator="__('Atau masuk dengan email')"
        />

        <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-5">
            @csrf

            <flux:input
                name="email"
                :label="__('Surel')"
                :value="old('email')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="nama@contoh.com"
            />

            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Kata sandi')"
                    type="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    viewable
                />
            </div>

            <flux:checkbox name="remember" :label="__('Ingat saya')" :checked="old('remember')" />

            <p class="text-xs leading-relaxed text-[#737373]">
                {{ __('Maksimal 5 percobaan masuk per menit. Sesi berakhir setelah :minutes menit tidak aktif.', ['minutes' => config('session.lifetime')]) }}
            </p>

            <button
                type="submit"
                class="flex min-h-11 w-full items-center justify-center gap-2 bg-[#f12d12] px-4 text-sm font-semibold text-white transition hover:bg-[#d92810] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#f12d12] disabled:opacity-60"
                data-test="login-button"
            >
                {{ __('Masuk') }} <span aria-hidden="true">→</span>
            </button>
        </form>

        @if (Route::has('password.request'))
            <flux:link class="w-fit text-sm font-semibold text-[#e92c13]" :href="route('password.request')" wire:navigate>
                {{ __('Lupa kata sandi?') }}
            </flux:link>
        @endif

        @if (Route::has('register'))
            <p class="text-sm text-[#737373]">
                {{ __('Belum punya akun?') }}
                <flux:link class="font-semibold text-[#e92c13]" :href="route('register')" wire:navigate>{{ __('Daftar') }}</flux:link>
            </p>
        @endif
    </div>
</x-layouts::auth.split>
