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
                            Add Swimmer Performance
                        </h3>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 py-4">


                                <section>

                                    <form method="post" action="{{ route('addPerformance') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')

                                        <div>
                                            <x-input-label for="swimmer_id" :value="__('Swimmer')" />
                                            <select id="swimmer_id" name="swimmer_id" class="mt-1 block w-full" >
                                                <option value="">Select Swimmer</option>
                                                @foreach($swimmers as $swimmer)
                                                    <option value="{{ $swimmer->swimmer->id }}">{{ $swimmer->swimmer->username }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->default->get('coach_id')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="event_id" :value="__('Event')" />
                                            <select id="event_id" name="event_id" class="mt-1 block w-full" >
                                                <option value="">Select Event</option>
                                                @foreach($events as $event)
                                                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->default->get('coach_id')" class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="p_date" :value="__('Date')" />
                                            <x-text-input id="p_date" name="p_date" type="date"
                                                class="mt-1 block w-full" value="{{ old('p_date') }}"
                                                autocomplete="p_date" />
                                            <x-input-error :messages="$errors->default->get('p_date')"
                                                class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="time" :value="__('Time')" />
                                            <x-text-input id="time" name="time" type="time"
                                                class="mt-1 block w-full" value="{{ old('time') }}"
                                                autocomplete="time" />
                                            <x-input-error :messages="$errors->default->get('time')"
                                                class="mt-2" />
                                        </div>


                                        <div>
                                            <x-input-label for="report" :value="__('Performance Report')" />
                                            <x-text-input id="report" name="report" type="file" class="mt-1 block w-full"
                                                value="{{ old('report') }}" autocomplete="report" />
                                            <x-input-error :messages="$errors->default->get('report')" class="mt-2" />
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
