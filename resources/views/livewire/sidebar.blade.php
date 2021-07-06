<div>
    <div class="p-2 flex">
        <a class="mx-2 items-center" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
        </a>
        <span class="text-lg font-bold text-green-400 hidden md:block lg:block">DU</span>
        <span class="text-lg font-bold text-blue-400 hidden md:block lg:block">DU</span>
    </div>
    <nav>
        <ul class="p-2">
            <li
                class="mb-2 py-2 w-full rounded-md text-blue-300 hover:bg-blue-100 hover:text-blue-400 flex item-center {{ request()->is('dashboard') ? 'bg-blue-100 text-blue-400' : '' }}">
                <span class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </span>
                <a href="{{ route('dashboard') }}"
                    class="h-full ml-2 font-semibold hidden md:block lg:block">Dashboard</a>
            </li>
            <li
                class="py-2 w-full rounded-md text-blue-300 hover:bg-blue-100 hover:text-blue-400 flex item-center {{ request()->is('user/profile') ? 'bg-blue-100 text-blue-400' : '' }}">
                <span class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </span>
                <a href=" {{ route('profile.show') }}"
                    class="h-full ml-2 font-semibold hidden md:block lg:block">Profile</a>
            </li>

            <li>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="0 py-2 w-full border-2 border-blue-400 rounded-md text-blue-400 bg-white hover:bg-blue-500 hover:text-white flex mt-5 justify-center transition duration-500"
                        id="#logout" name="logout" class="h-full font-semibold hidden md:block lg:block"
                        href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"> <svg
                            xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <div class="block sm:hidden">
                            {{ __('Log Out') }}
                        </div>
                    </a>
                </form>

            </li>
        </ul>
    </nav>
</div>
