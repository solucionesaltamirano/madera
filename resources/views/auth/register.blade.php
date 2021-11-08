<x-guest-layout>
    <div class="pt-6 bg-gray-100">

        <x-jet-authentication-card >
            <x-slot name="logo">
                {{-- <x-jet-authentication-card-logo /> --}}
                <a href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="Soluciones Altamirano" class="h-20 w-auto ">
                </a>
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="username" value="{{ __('User Name') }} ({{ __('optional') }})" /> 
                    <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"  />
                </div>
                
                <div class="mt-4">
                    <x-jet-label for="phone" value="{{ __('Phone') }} ({{ __('optional') }})" />
                    <x-jet-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone') "  pattern="[0-9]{4}[0-9]{4}"   />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>
    
                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
    
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
    
                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
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
    </div>
</x-guest-layout>
