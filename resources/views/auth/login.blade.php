<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <a href="/">
                <img src="{{ asset('img/logo.svg') }}" alt="Soluciones Altamirano" class="h-20 w-auto ">
            </a>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="login" value="{{ __('Email / name / user name / phone') }}" />
                <x-jet-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        <div class="flex justify-between items-center mt-3">
        <hr class="w-full"> <span class="p-2 text-gray-400 mb-1">OR</span>
                <hr class="w-full">
        </div>
        <div>
            <a href="{{ route('login-facebook') }}" class="block w-full bg-blue-500 hover:bg-blue-700 text-center text-white font-bold py-2 px-4 rounded">
                <i class="fab fa-facebook-f"></i>
                Facebook
            </a>
            <a href="{{ route('login-google') }}" class="block w-full bg-red-500 hover:bg-red-700 text-center text-white font-bold py-2 px-4 rounded mt-2">
                <i class="fab fa-google"></i>
                Google
            </a>
            
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

