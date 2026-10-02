@props(['title' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-svh bg-[#f3f1f1] font-sans text-[#20242c] antialiased">
        <div class="grid min-h-svh md:grid-cols-2">
            <section class="flex min-h-64 flex-col justify-between bg-[#f12d12] px-8 py-8 text-white sm:px-12 sm:py-10 md:min-h-svh md:px-14 md:py-12">
                <a href="{{ route('home') }}" class="flex w-fit items-center gap-2 text-xs font-extrabold tracking-[0.12em]" wire:navigate>
                    <span class="size-3 rounded-[1px] bg-white"></span>
                    KANTIN TEKNIK
                </a>

                <div class="py-10 lg:py-0">
                    <h1 class="max-w-lg text-4xl font-bold leading-[1.06] tracking-tight sm:text-5xl lg:text-[clamp(2.5rem,4vw,4rem)]">
                        Satu kantin.<br>
                        Banyak dapur.<br>
                        Satu sistem.
                    </h1>
                    <p class="mt-5 text-sm font-medium text-white/90 sm:text-base">
                        Portal tenant &amp; pengelola — Universitas Nusantara
                    </p>
                </div>

                <p class="text-[10px] font-bold tracking-[0.18em] text-white/85">
                    MULTI-TENANT <span aria-hidden="true">·</span> QRIS <span aria-hidden="true">·</span> REAL-TIME
                </p>
            </section>

            <main class="flex min-h-[60svh] items-center justify-center px-6 py-12 sm:px-10 md:min-h-svh md:px-12">
                <div class="w-full max-w-md">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
