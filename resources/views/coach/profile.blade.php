<div class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900 py-2">
            Coach Profile Detail

            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
            focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
            focus:ring-offset-2 transition ease-in-out duration-150 ml-12" href="{{ route('addevent') }}">Add New Events</a>

            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent
            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700
            focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
            focus:ring-offset-2 transition ease-in-out duration-150 ml-12" href="{{ route('performance') }}">Add Performance</a>

        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <div class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 py-4">

                <p class="py-1"><strong>Email:</strong> {{ $coach->email }} </p>
                <p class="py-1"><strong>Username:</strong> {{ $coach->username }} </p>
                <p class="py-1"><strong>Sur Name:</strong> {{ $coach->surname }} </p>
                <p class="py-1"><strong>Fore Name:</strong> {{ $coach->email }} </p>
                <p class="py-1"><strong>Address:</strong> {{ $coach->address }} </p>
                <p class="py-1"><strong>Phone No:</strong> {{ $coach->phone_no }} </p>
                <p class="py-1"><strong>Postcode:</strong> {{ $coach->postcode }} </p>


            </div>



        </div>
    </div>
</div>
