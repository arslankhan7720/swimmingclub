<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Delete Confirmation') }}
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

    @if ($errors->any())
    <div class="py-12" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 20000)"
        class="text-sm text-gray-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-red-500 overflow-hidden shadow-sm sm:rounded-lg py-4 px-4 ">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <div class="sm:divide-y sm:divide-gray-200">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-6 sm:gap-4 sm:px-6 py-4">





                                <form method="post" action="{{ route('deleteEvent', ['id' => $event->id]) }}">
                                    @csrf
                                    @method('DELETE')

                                    <p class="py-2 my-2"><strong>Are you sure you want to delete this Event?</strong></p>
                                    <p class="py-1"><strong>Event Name:</strong> {{ $event->name }} </p>
                                    <p class="py-1"><strong>Event Location:</strong> {{ $event->location }} </p>
                                    <p class="py-1"><strong>Event Date:</strong> {{ $event->event_date }} </p>


                                    <div class="py-4">
                                        <input type="checkbox" id="confirmation" name="confirmation" value="1">
                                        <label for="confirmation">Yes, I want to delete this event.</label>

                                    </div>


                                    <button
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs
                                                text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none
                                                focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                        type="submit">Delete</button>
                                </form>


                            </div>



                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>




</x-app-layout>
