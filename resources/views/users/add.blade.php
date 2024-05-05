<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <section>

                        <form method="post" action="{{ route('storeuser') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            {{-- @dump($errors) --}}

                            <div>
                                <x-input-label for="Username" :value="__('Username')" />
                                <x-text-input id="Username" name="username" type="text" class="mt-1 block w-full"  value="{{ old('username') }}" autocomplete="username" />
                                <x-input-error :messages="$errors->default->get('username')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="Email" :value="__('Email')" />
                                <x-text-input id="Email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email') }}" autocomplete="email" />
                                <x-input-error :messages="$errors->default->get('email')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="Password" :value="__('Password')" />
                                <x-text-input id="Password" name="password" type="password" class="mt-1 block w-full" value="{{ old('password') }}" autocomplete="password" />
                                <x-input-error :messages="$errors->default->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="Forename" :value="__('Forename')" />
                                <x-text-input id="Forename" name="forename" type="text" class="mt-1 block w-full" value="{{ old('forename') }}" autocomplete="forename" />
                                <x-input-error :messages="$errors->default->get('forename')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="surname" :value="__('Surname')" />
                                <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" value="{{ old('surname') }}" autocomplete="surname" />
                                <x-input-error :messages="$errors->default->get('surname')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
                                <x-text-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" value="{{ old('date_of_birth') }}" autocomplete="date_of_birth" />
                                <x-input-error :messages="$errors->default->get('date_of_birth')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="address" :value="__('Address')" />
                                <textarea  name="address"  id="address"  class="mt-1 block w-full">{{ old('phone_no') }}</textarea>
                                <x-input-error :messages="$errors->default->get('address')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="phone_no" :value="__('Phone No')" />
                                <x-text-input id="phone_no" name="phone_no" type="text" class="mt-1 block w-full" value="{{ old('phone_no') }}" autocomplete="phone_no" />
                                <x-input-error :messages="$errors->default->get('phone_no')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="postcode" :value="__('Postcode')" />
                                <x-text-input id="postcode" name="postcode" type="text" class="mt-1 block w-full" value="{{ old('postcode') }}" autocomplete="postcode" />
                                <x-input-error :messages="$errors->default->get('postcode')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="role" :value="__('Role')" />
                                <select id="role" name="role" class="mt-1 block w-full" >
                                    <option value="admin">Admin</option>
                                    <option value="parent">Parent</option>
                                    <option value="coach">Coach</option>
                                    <option value="swimmer">Swimmer</option>
                                </select>
                                <x-input-error :messages="$errors->default->get('role')" class="mt-2" />
                            </div>


                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{
                                    __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
