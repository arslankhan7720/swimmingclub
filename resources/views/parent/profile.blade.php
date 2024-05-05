<div class="bg-white overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900 py-2">
            Parent Profile Detail
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <div class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 py-4">

                <p class="py-1"><strong>Email:</strong> {{ $parent->email }} </p>
                <p class="py-1"><strong>Username:</strong> {{ $parent->username }} </p>
                <p class="py-1"><strong>Sur Name:</strong> {{ $parent->surname }} </p>
                <p class="py-1"><strong>Fore Name:</strong> {{ $parent->email }} </p>
                <p class="py-1"><strong>Address:</strong> {{ $parent->address }} </p>
                <p class="py-1"><strong>Phone No:</strong> {{ $parent->phone_no }} </p>
                <p class="py-1"><strong>Postcode:</strong> {{ $parent->postcode }} </p>


            </div>



        </div>
    </div>
</div>
