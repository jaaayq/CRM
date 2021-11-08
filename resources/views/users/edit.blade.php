
        <x-admincreate-layout>
         
            <x-jet-authentication-card>
                <x-slot name="logo">
                    <x-jet-authentication-card-logo />
                </x-slot>
                <h1 class="text-center text-white font-RO">EDIT USERS</h1> <br>
                <x-jet-validation-errors class="mb-4" />
        
                <form method="POST" action="{{ route('users.update', $user->id) }}"  autocomplete="off">
                    @method('PATCH')
                    @csrf
        
                    <div>
                        <x-jet-label class="text-black font-RO" for="name" value="{{ __('Name') }}" /> 
                        <input id="name "  class="text-black bg-white block mt-1 w-full px-3 py-1 rounded-lg " type="text"   name="name" autofocus autocomplete="name" required value={{ old('name') }}
                        @isset($user) {{$user->name}} @endisset> 
                    </div>

                    <div class="mt-4">
                        <x-jet-label class="text-black font-RO" for="email" value="{{ __('Username') }}" />
                        <input id="username" class="text-black bg-white w-full px-3 py-1 rounded-lg" type="text" name="username"  required value={{ old('username') }}
                         @isset($user) {{$user->username}} @endisset>
                    </div>
                    
                    <div class="mt-4">
                        <x-jet-label class="text-black font-RO" for="email" value="{{ __('Email') }}" />
                        <input id="email" class="text-black bg-white w-full px-3 py-1 rounded-lg" type="email" name="email"  required value={{ old('email') }}
                         @isset($user) {{$user->email}} @endisset>
                    </div>
                    @isset($create)
                        
                    
                    <div class="mt-4">
                        <x-jet-label class="text-black font-RO" for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="text-black bg-white w-full px-3 py-1 rounded-lg" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    
                    @endisset
                    <div class="mt-4">
                        
                            
                        <x-jet-label class="text-black font-RO" for="role" value="{{ __('Role:') }}" /> <br>
                        <select name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            
                              <option  {{old('role',$user->role)=="admin"? 'selected':''}} value="admin" >Admin</option>
                            <option  {{old('role',$user->role)=="user"? 'selected':''}} value="user" >User</option> 
                         
                      
                         
                            
                        </select>
                        
                       
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
                    <br>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('users.index') }}">
                            {{ __('Return to Users List') }}
                        </a>
                    
                        <x-jet-button class="ml-4">
                            {{ __('Create') }}
                        </x-jet-button>
                    </div>
                    </div>
                </form>
            </x-jet-authentication-card>
        </x-admincreate-layout>
        
