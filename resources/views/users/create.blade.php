
        <x-admincreate-layout>
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
        
                <x-jet-validation-errors class="mb-4" />

                
                <form method="POST" action="{{ route('users.store') }}" autocomplete="off">
                 @include('users.form', ['create' => true])
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-admincreate-layout>
        
