<div>
    <div class="md:flex gap-4 justify-center hidden sm:flex">
        <div class="bg-white shadow-md p-12 rounded-md w-full">
            <div class="text-sm text-gray-400 font-bold absolute">

                <livewire:todo-count></livewire:todo-count>
                <div
                    class="p-2 absolute ml-1 bg-green-100 text-green-400 md:border-none md:-top-3 md:left-40 md:rounded-lg sm:left-9 sm:-top-16 sm:border-2 sm:border-green-400 sm:rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </div>
                <span class="absolute -ml-10 -mt-11">myTodo</span>
            </div>
        </div>
        <div class="bg-white shadow-md p-12 w-full rounded-md">
            <div class="text-sm text-gray-400 font-bold absolute">
                <livewire:count-completed></livewire:count-completed>
                <div
                    class="p-2 absolute ml-1 bg-red-100 text-red-400 md:border-none md:-top-3 md:left-40 md:rounded-lg sm:left-9 sm:-top-16 sm:border-2 sm:border-red-400 sm:rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                </div>
                <span class="absolute -ml-10 -mt-11">Completed</span>
            </div>
        </div>
    </div>
</div>
