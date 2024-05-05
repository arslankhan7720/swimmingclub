<div class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900 py-2">
            Events Added List
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <div class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 py-4">

                @foreach ($events as $event )
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        {{-- @dump( $event->toArray() ) --}}

                        <img src="{{ asset($event->image) }}" alt="{{ $event->name }}">


                        <header class="flex items-center justify-between leading-tight p-2 md:p-4 mt-2">
                            <p class="text-sm"><strong> Event Name </strong> : {{ $event->name }}</p>
                        </header>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <p class="text-sm"><strong> Event Location </strong> : {{ $event->location }}</p>
                        </header>

                        <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                            <p class="text-sm"><strong> Event Date Time </strong> : {{ $event->event_date }}</p>
                        </header>

                        <footer class="px-2 py-4">
                            <a  href="{{route('removeEvent',['id' =>$event->id ])}}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
                                        rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
                                        focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                        focus:ring-offset-2 transition ease-in-out duration-150">
                                Delete
                            </a>
                        </footer>

                    </article>
                @endforeach



            </div>
        </div>
    </div>
</div>
