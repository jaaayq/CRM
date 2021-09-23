
        <x-guest-layout>
         
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
                <h1 class="text-center">Edit users</h1> <br>
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @method('PATCH')
                 @include('users.form')
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-guest-layout>
        
