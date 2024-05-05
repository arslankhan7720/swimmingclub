<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <h3 class="text-lg leading-6 font-medium text-gray-900 py-2 px-4">
        Swimmer Squad List
    </h3>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-4"> Username</th>
                <th scope="col" class="px-6 py-4"> Email </th>
                <th scope="col" class="px-6 py-4"> Phone</th>
                <th scope="col" class="px-6 py-4"> Status</th>
                <th scope="col" class="px-6 py-4"> Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coach_swimmers as $swimmer)


            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$swimmer->swimmer->username}}</th>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$swimmer->swimmer->email}} </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$swimmer->swimmer->phone_no}}</td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                        {{ $swimmer->swimmer->status =='unverified'?'Not-Verified': $swimmer->swimmer->status}}</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('performanceDetail', ['id' => $swimmer->swimmer->id]) }}"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Performance</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
