<header>
    <nav class="bg-white border-b border-gray-200">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center h-14 w-auto">
                <img src="{{ asset('logo/logoJWEB.jpg') }}" alt="Logo" class="h-full w-auto object-contain">
            </a>
            <form class="flex items-center max-w-sm w-9/12">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="simple-search"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg shadow-md focus:ring-2 focus:ring-purple-600 focus:border-transparent block w-full pl-3 p-2.5"
                        placeholder="Search..." required />
                    <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-3">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </form>
            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <button class="text-sm text-white bg-purple-600 hover:bg-purple-400 rounded-md px-4 py-2 transition duration-200">
                    Login
                </button>
                <button class="text-sm text-purple-700 border border-purple-600 bg-white hover:bg-purple-100 rounded-md px-4 py-2 transition duration-200">
                    Register
                </button>
            </div>
        </div>
    </nav>
    <nav class="bg-gray-50 dark:bg-purple-700">
        <div class="max-w-screen-xl px-4 py-3 mx-auto">
            <div class="flex items-center">
                <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Company</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Team</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-white hover:underline">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>