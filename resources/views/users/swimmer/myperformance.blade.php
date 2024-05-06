

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 py-2">
                    My Swimming Performance Detail
                </h3>
            </div>

            <div class="px-6 py-2 text-gray-900 text-center">

                <section>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4"> Name</th>
                                <th scope="col" class="px-6 py-4"> Email </th>
                                <th scope="col" class="px-6 py-4"> Phone</th>
                                <th scope="col" class="px-6 py-4"> Event </th>
                                <th scope="col" class="px-6 py-4"> Date </th>
                                <th scope="col" class="px-6 py-4"> Time </th>
                                <th scope="col" class="px-6 py-4"> Status </th>
                                <th scope="col" class="px-6 py-4"> Report </th>
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
                                    {{$perf->swimmer->phone_no}}</td>

                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $perf->event? $perf->event->name : ''}}</td>

                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$perf->p_date}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$perf->time}}</td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$perf->status}}</td>

                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{ asset($perf->report) }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        View Report
                                    </a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </section>


            </div>
        </div>
    </div>
</div>



