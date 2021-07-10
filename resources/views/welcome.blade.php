<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DUDU</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @livewireStyles


</head>

<body class="bg-indigo-50 ">
    <section class="text-gray-400  body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4  text-gray-700">
                    <span class="text-green-500 font-semibold"> DU</span><span class="font-semibold">DU</span>

                    <br class="hidden lg:inline-block">buatlah harimu menyenangkan🎉
                </h1>
                <p class="mb-8 leading-relaxed">dudu adalah sebuah web todolist yang dibuat menggunakan laravel
                    Jetstream + livewire, ini cocok sekali buat kalian yang ingin belajar laravel livewire karna web ini
                    dibuat secara simpel dan mudah dimengerti.</p>

                <div class="flex justify-center">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Dashboard</a>
                                <a href="{{ route('logout') }}"
                                    class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Logout</a>
                            </div>
                        @else
                            <a href="{{ url('/login') }}"
                                class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Login</a>


                            @if (Route::has('register'))

                                <a href="{{ route('register') }}"
                                    class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Register</a>
                    </div>
                    @endif
                @endauth
            </div>
            @endif
        </div>
        <div class="lg:max-w-lg  lg:w-full md:w-1/2 w-5/6 border-r-4 ">
            <img class="object-cover object-center rounded shadow-sm border-4 border-white" alt="" src="#">
        </div>
        </div>
    </section>
    @livewireScripts
</body>

</html>
