<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coach Dashboard') }}
        </h2>



    </x-slot>

    @if (session('success'))
    <div class="py-12" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
        class="text-sm text-gray-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p>{{ __('Saved.') }} {{session('success')}} </p>
            </div>
        </div>
    </div>
    @endif


    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                {{-- ========================================= --}}
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 py-2">
                            Add New Event
                        </h3>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 py-4">


                                <section>

                                    <form method="post" action="{{ route('addNewEvent') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')


                                        <div>
                                            <x-input-label for="name" :value="__('Event Name')" />
                                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                                value="{{ old('name') }}" autocomplete="name" />
                                            <x-input-error :messages="$errors->default->get('name')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="location" :value="__('Location')" />
                                            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full"
                                                value="{{ old('location') }}" autocomplete="location" />
                                            <x-input-error :messages="$errors->default->get('location')" class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="event_date" :value="__('Event Time')" />
                                            <x-text-input id="event_date" name="event_date" type="datetime-local"
                                                class="mt-1 block w-full" value="{{ old('event_date') }}"
                                                autocomplete="event_date" />
                                            <x-input-error :messages="$errors->default->get('event_date')"
                                                class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="image" :value="__('Event Image')" />
                                            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full"
                                                value="{{ old('image') }}" autocomplete="image" />
                                            <x-input-error :messages="$errors->default->get('image')" class="mt-2" />
                                        </div>


                                        <div class="flex items-center gap-4">
                                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                                            @if (session('status') === 'password-updated')
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)"
                                                class="text-sm text-gray-600">{{
                                                __('Saved.') }}</p>
                                            @endif
                                        </div>
                                    </form>
                                </section>



                            </div>



                        </div>
                    </div>
                </div>

                {{-- ========================================= --}}

            </div>
        </div>
    </div>

</x-app-layout>
