<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DUDU') }}</title>
    <link rel="shortcut icon" href="{{ asset('/image/d.png') }}" type="image/png">
    <!-- Fonts -->


    <!-- Styles -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-indigo-50">

        @livewire('navigation-menu')


        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 hidden sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{-- sidebar --}}
        <div class="flex-col w-full md:flex md:flex-row md:min-h-screen bg-blueGray-50">
            <div class="hidden md:flex  flex-col flex-shrink-0 w-full text-blueGray-700 bg-white shadow-xl md:w-64 ">
                <div class=" flex flex-col items-center flex-shrink-0 bg-blueGray-50">

                </div>
                <div class="flex flex-col items-center   flex-shrink-0 pb-4 bg-blueGray-50 mt-5">
                    <img alt="testimonial"
                        class="inline-block object-cover object-center w-20 h-20 mb-8 bg-blueGray-100 rounded-full"
                        src="{{ Auth::user()->profile_photo_url }}">
                    <h2 class=" text-sm font-medium tracking-widest text-black uppercase title-font">
                        {{ Auth::user()->name }}</h2>
                    <p class="text-blueGray-500">{{ Auth::user()->email }}</p>
                </div>
                <nav class="flex-grow pb-4 pr-4 hidden md:block md:pb-0 md:overflow-y-auto">
                    <ul>
                        <li>

                            <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4  hover:border-blue-600 focus:bg-indigo-100  hover:text-black {{ request()->is('dashboard') ? ' border-blue-600' : '' }}"
                                href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li>
                            <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4  hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black {{ request()->is('user/profile') ? 'border-blue-600' : '' }}"
                                href="{{ route('profile.show') }}">Profile</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }} ">
                                @csrf

                                <a class="block px-4 py-2 mt-2 text-base text-blueGray-500 transition duration-500 ease-in-out transform border-l-4  hover:border-blue-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black {{ request()->is('/logout') ? 'border-blue-600' : '' }}"
                                    id="#logout" name="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">

                                    {{ __('Log Out') }}

                                </a>
                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
            {{-- end sidebar --}}
            <main class="p-4">
                {{ $slot }}
            </main>
        </div>



        <!-- Page Content -->
    </div>

    @stack('modals')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
