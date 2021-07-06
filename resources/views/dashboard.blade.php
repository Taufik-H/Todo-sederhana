<x-app-layout>
    <div class=" h-screen px-12 py-6 ">
        <!-- mobile version -->
        <div class="container md:hidden sm:hidden xl:hidden">
            <!-- card -->
            <div class="p-2">
                <div class="grid grid-flow-col grid-cols-2  gap-2">

                    <div class="w-full bg-white shadow-md p-6 rounded-md text-gray-400 font-bold">2</div>
                    <div class="w-full bg-white shadow-md p-6 rounded-md text-gray-400 font-bold">2</div>

                </div>
            </div>
            <!-- search -->
            <div class="p-3">
                <div class="">
                    <form method="post" action="{{ route('todo.create') }} " class="flex">
                        @csrf
                        <input name="title" required
                            class="p-5 focus:outline-none focus:ring-2 focus:ring-green-400 bg-white font-semibold text-gray-400 w-full flex rounded-md shadow-md transition duration-200"
                            type="text" placeholder="Tugas..." />

                        <button type="submit"
                            class=" p-2 ml-2 hover:bg-blue-500 text-white font-semibold rounded-md bg-blue-400">Send</button>
                    </form>
                </div>
            </div>
            <!-- list -->
            <div class="p-3">

                <div class="bg-gray-50 w-full p-2 rounded-md">
                    @foreach ($todo as $t)
                        <div class="p-5 bg-white rounded-md shadow-sm mb-2 flex justify-between">
                            <span>{{ $t->title }}</span>
                            <button
                                class="bg-green-100 w-20 h-17 rounded-md text-green-400 font-semibold focus:outline-none focus:ring-1 focus:ring-green-300 focus:bg-green-200">Complete</button>
                        </div>

                    @endforeach
                    <div class="mt-4 p-2">


                    </div>
                </div>
            </div>
        </div>

        <!-- akhir mobile -->
        <div class="w-full sm:hidden md:hidden lg:hidden xl:hidden">
            <ul class="fixed inset-x-0 bottom-0 z-10 p-2 bg-white border-t-2 shadow-md flex text-blue-700">
                <li
                    class="mx-auto text-xl p-5 rounded-full hover:bg-blue-700 hover:text-white transition duration-500 ease-in-out">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                        </svg>
                    </a>
                </li>
                <li
                    class="mx-auto text-xl p-5 rounded-full hover:bg-blue-700 hover:text-white transition duration-500 ease-in-out">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </a>
                </li>
                <li
                    class="mx-auto text-xl p-5 rounded-full hover:bg-blue-700 hover:text-white transition duration-500 ease-in-out">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- desktop version -->
        <div class="grid p-5 grid-cols-12 gap-2">
            <!-- grid row col sidbar -->
            <div class="row-span-auto col-span-2">
                <div
                    class="shadow-md bg-white text-blue-700 pb-80 transform transition duration-700 ease-in-out hidden sm:w-14 sm:block md:w-52 lg:w-52 rounded-md">
                    <livewire:sidebar></livewire:sidebar>
                </div>
            </div>
            <!-- grid row col content -->

            <div class="row-span-auto col-span-7 p-5">
                <livewire:card-count></livewire:card-count>
                <div class="bg-white p-4 w-full mt-5 rounded-md shadow-md mx-auto hidden md:block sm:block">
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-gray-400 mr-1 font-semibold">List Todo</div>
                        {{-- form todoadd --}}
                        <livewire:todo-create></livewire:todo-create>
                    </div>

                </div>
                <livewire:list-todo></livewire:list-todo>
            </div>
            <livewire:card-profile></livewire:card-profile>
        </div>
    </div>
</x-app-layout>
