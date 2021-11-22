
<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
        <div class="mb-4 font-medium text-sm text-red-600">
            {{session('error')}}
        </div>
    @endif


        <form method="POST" action="{{ route('login') }}"  autocomplete="off">
            @csrf

            <div>
                <x-jet-label class="text-white" for="login" value="{{ __('Username') }}" />
                <x-jet-input id="login" class="block mt-1 w-full px-3 py-1  rounded-lg " type="text" name="login" :value="old('username')" required autofocus  />
            </div>

            <div class="mt-4">
                <x-jet-label  class="text-white" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full px-3 py-1  rounded-lg" type="password" name="password" required autocomplete="current-password" />
            </div>

       

            <div class=" pl-36 items-center justify-end mt-4">

              <!--  @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

</x-guest-layout>
