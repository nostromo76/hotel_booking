<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Hotel CALIFORNIA FMI</span>
        </a>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <x-nav-bar-link href="/" :active="request()->is('/')">Home</x-nav-bar-link>
                </li>
                <li>
                    <x-nav-bar-link href="{{ route('rooms') }}" :active="request()->is('rooms')">Rooms &amp; Facilities</x-nav-bar-link>
                </li>
                <li>
                    <x-nav-bar-link href="categories" :active="request()->is('categories')">Hot offer now</x-nav-bar-link>
                </li>
                <li>
                    <x-nav-bar-link href="admin" :active="request()->is('admin')">Admin</x-nav-bar-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{$slot}}
