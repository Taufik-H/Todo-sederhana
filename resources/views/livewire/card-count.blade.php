<div>
    <section class="text-gray-600 body-font mx-auto">
        <div class="container flex flex-wrap justify-center ">
            <div class="flex flex-wrap -m-4">
                <div class="p-4 w-1/2 lg:w-1/2 md:w-full ">
                    <div
                        class="flex border-2 bg-white rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div
                            class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-white border-2 border-indigo-100 text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">MyTodo</h2>
                            <p class="leading-relaxed text-base">
                                <livewire:todo-count></livewire:todo-count>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-4 w-1/2 lg:w-1/2 md:w-full">
                    <div
                        class="flex border-2 rounded-lg bg-white border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                        <div
                            class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full border-2 border-indigo-100 bg-white text-indigo-500 flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Completed</h2>
                            <p class="leading-relaxed text-base">
                                <livewire:count-completed></livewire:count-completed>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
