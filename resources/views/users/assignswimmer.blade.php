<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">

                    <section>

                        <form method="post" action="{{ route('assignswimmersubmit') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')


                            <div>
                                <x-input-label for="coach_id" :value="__('Coach')" />
                                <select id="coach_id" name="coach_id" class="mt-1 block w-full" >
                                    <option value="">Select Coach</option>
                                    @foreach($coaches as $coach)
                                        <option value="{{ $coach->id }}">{{ $coach->username }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->default->get('coach_id')" class="mt-2" />
                            </div>


                            <div>
                                <x-input-label for="swimmer_id" :value="__('Swimmer')" />
                                <select id="swimmer_id" name="swimmer_id" class="mt-1 block w-full" >
                                    <option value="">Select Swimmer</option>
                                    @foreach($swimmers as $swimmer)
                                        <option value="{{ $swimmer->id }}">{{ $swimmer->username }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->default->get('swimmer_id')" class="mt-2" />
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
