<section class="py-16 bg-white-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Member Access</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Login -->
            <div class="flex flex-col items-center justify-center p-6 bg-blue-100 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
                <h3 class="text-xl font-semibold text-blue-800 mb-4">Login</h3>
                <p class="text-gray-600 text-center mb-6">Already have an account? Sign in to access your account.</p>
                <a  href="{{  route('login') }}"
                    class="bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300">Sign
                    In</a>
            </div>
            <!-- Registration -->
            <div class="flex flex-col items-center justify-center p-6 bg-green-100 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-green-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>


                <h3 class="text-xl font-semibold text-green-800 mb-4">Registration</h3>
                <p class="text-gray-600 text-center mb-6">New to our club? Register now to become a member.</p>
                <a  href="{{  route('register') }}"
                    class="bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 transition-colors duration-300">Register</a>
            </div>
            <!-- Coach Login -->
            <div class="flex flex-col items-center justify-center p-6 bg-red-100 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-red-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M12 22V12">
                    </path>
                </svg>
                <h3 class="text-xl font-semibold text-red-800 mb-4">Coach Login</h3>
                <p class="text-gray-600 text-center mb-6">Coaches can access their coaching tools and resources here.
                </p>
                <a href="{{ route('coach-login') }}"
                    class="bg-red-500 text-white px-8 py-3 rounded-lg hover:bg-red-600 transition-colors duration-300">Coach
                    Login</a>
            </div>
            <!-- Parent Login -->
            <div class="flex flex-col items-center justify-center p-6 bg-purple-100 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-purple-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 5v14m0 0l4.5-4.5m-4.5 4.5L8 5 3.5 9.5M16 19l-4.5-4.5m4.5 4.5L16 5l4.5 4.5M16 19H8"></path>
                </svg>
                <h3 class="text-xl font-semibold text-purple-800 mb-4">Parent Login</h3>
                <p class="text-gray-600 text-center mb-6">Parents can log in to view their child's progress and
                    schedules.</p>
                <a href="{{ route('parent-login') }}"
                    class="bg-purple-500 text-white px-8 py-3 rounded-lg hover:bg-purple-600 transition-colors duration-300">Parent
                    Login</a>
            </div>
        </div>
    </div>
</section>

