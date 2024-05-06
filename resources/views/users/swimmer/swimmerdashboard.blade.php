<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Swimmer Dashboard') }}
        </h2>
    </x-slot>



    @if(auth()->user()->status === 'unverified')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 py-2 text-gray-900 text-center">
                    {{ __("You're Account is under verification, please be patient!") }}

                </div>
                <div class="px-6 py-2 text-gray-900 text-center">
                   {{ __("Once Admin verify your account, than you will be able to see your score") }}

                </div>
            </div>
        </div>
    </div>
    @endif



    @if(auth()->user()->role === 'swimmer' && auth()->user()->status === 'verified')

        @include('users.swimmer.myperformance')

    @endif

</x-app-layout>
