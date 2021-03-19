<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full italic text-black" type="email" name="email" placeholder="ail" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-7">
                <x-input id="password" class="block mt-1 w-full italic text-black" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
            </div>

            <!-- Login -->
            <div class="mt-10">
                <x-button style="font-family: 'Orbitron'" class="bg-black text-white">
                    {{ __('Sign In') }}
                </x-button>
            </div>

            <div class="mt-10 text-center">
                <a style="font-family: 'Orbitron'" class="underline text-base text-white" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </div>

            <div class="mt-3 text-center">
                <a style="font-family: 'Orbitron'" class="underline text-base text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot Login') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
