<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" autocomplete="off">
            @csrf

            <div>
                <x-jet-label class="text-white" for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full px-3 py-1 rounded-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full px-3 py-1 rounded-lg" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

           

            <div class="mt-4">
                <x-jet-label class="text-white" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full px-3 py-1 rounded-lg" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full px-3 py-1  rounded-lg" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label class="text-white" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full px-3 py-1 rounded-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
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
                <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
