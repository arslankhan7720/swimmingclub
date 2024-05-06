<nav class="bg-black bg-opacity-65 to-indigo-600">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="https://flowbite.com/" class="text-white text-2xl font-semibold">
            <span class="text-white">NorthWest Swim Club</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="md:hidden text-white hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:text-gray-300 dark:focus:ring-gray-600">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="hidden md:block">
            <ul class="flex items-center space-x-4">
                <li>
                    <a href="#" class="text-white hover:text-gray-100">Home</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-100">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="text-white hover:text-gray-100">Register</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-gray-100">Services</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-gray-100">Pricing</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-gray-100">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

