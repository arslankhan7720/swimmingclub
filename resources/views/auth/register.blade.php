<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="sm:mx-auto sm:w-full sm:max-w-xl">
            <div class="text-center">
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    {{ __('Register') }}
                </h2>
            </div>
            <div class="mt-8 bg-white py-8 px-4 shadow">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <!-- Name -->
                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Username -->
                        <div class="mt-4">
                            <x-input-label for="username" :value="__('Username')" />
                            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Forename -->
                        <div class="mt-4">
                            <x-input-label for="forename" :value="__('Forename')" />
                            <x-text-input id="forename" class="block mt-1 w-full" type="text" name="forename" :value="old('forename')" required autocomplete="given-name" />
                            <x-input-error :messages="$errors->get('forename')" class="mt-2" />
                        </div>

                        <!-- Surname -->
                        <div class="mt-4">
                            <x-input-label for="surname" :value="__('Surname')" />
                            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autocomplete="family-name" />
                            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                        </div>

                        <!-- Date of Birth -->
                        <div class="mt-4">
                            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
                            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required autocomplete="bday" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>

                        <!-- Address -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Phone Number -->
                        <div class="mt-4">
                            <x-input-label for="phone_no" :value="__('Phone Number')" />
                            <x-text-input id="phone_no" class="block mt-1 w-full" type="tel" name="phone_no" :value="old('phone_no')" required autocomplete="tel" />
                            <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
                        </div>

                        <!-- Postcode -->
                        <div class="mt-4">
                            <x-input-label for="postcode" :value="__('Postcode')" />
                            <x-text-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" :value="old('postcode')" required />
                            <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                        </div>

                        <!-- Role -->
                        <div class="mt-4 col-span-2">
                            <x-input-label for="role" :value="__('Role')" />
                            <select id="role" name="role" class="mt-1 block w-full">
                                <option value="parent">Parent</option>
                                <option value="coach">Coach</option>
                                <option value="swimmer">Swimmer</option>
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
