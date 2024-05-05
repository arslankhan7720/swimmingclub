<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4"> Username</th>
                                <th scope="col" class="px-6 py-4"> Email </th>
                                <th scope="col" class="px-6 py-4"> Event Name</th>
                                <th scope="col" class="px-6 py-4"> Date</th>
                                <th scope="col" class="px-6 py-4"> Time</th>
                                <th scope="col" class="px-6 py-4"> Report</th>
                                <th scope="col" class="px-6 py-4"> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($performance as $perf)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$perf->swimmer->username}}</th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$perf->swimmer->email}} </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$perf->event->name}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$perf->p_date}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$perf->time}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{ asset($perf->report) }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        View Report
                                    </a>
                                </td>

                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('postVerifyPerformance', ['id' => $perf->id]) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Verify</a>

                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>


            </div>
        </div>
    </div>
</x-app-layout>
