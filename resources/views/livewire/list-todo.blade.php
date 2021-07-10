<div>
    @foreach ($todo as $t)

        @if ($t->isUser())


            @if ($t->isCompleted())

                <div class="bg-gray-50 p-2 border-2  border-green-300 w-full mt-2 rounded-md  shadow-md mx-auto">
                    <div class="flex justify-between items-center">

                        <div class="text-red-500  flex items-center "><svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class=" text-sm text-gray-400 font-bold p-2 line-through ">{{ $t->title }}</div>
                        </div>

                        <div class="   flex"><span
                                class="flex text-green-600 bg-green-200 rounded-full font-semibold w-6 h-6  items-center "><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-auto" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <button wire:click="destroy({{ $t->id }})"
                                class=" flex mx-4 bg-red-200 hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-red-200 rounded-full focus:ring-opacity-50">
                                <span
                                    class="flex font-semibold text-red-600 hover:text-red-500  focus:outline-none  rounded-full w-6 h-6 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-auto" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>

                            </button>
                        </div>
                    </div>
                @elseif (!$t->isCompleted())
                    <div class="bg-white p-2 w-full mt-4 rounded-md shadow-md mx-auto ">
                        <div class="flex justify-between items-center">

                            @if ($TodoIdForm === $t->id)

                                <div class="text-sm text-yellow-300 font-bold">{{ $text }}</div>
                            @else
                                <div class="text-red-500 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <div class=" text-sm text-gray-600 font-bold p-2">{{ $t->title }}</div>
                                </div>
                            @endif
                            <div class="flex">

                                <button wire:click="TodoUpdateForm({{ $t->id }})"
                                    class=" p-2 hover:bg-indigo-300 text-indigo-500 focus:outline-none focus:ring-2 focus:indigo-green-200 focus:ring-opacity-50 font-semibold rounded-md bg-indigo-200 flex mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>

                                <button wire:click="TodoUpdate({{ $t->id }})"
                                    class=" p-2 bg-green-200 hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-opacity-50 text-green-400 hover:text-green-500 rounded-md font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
            @endif
            @if ($TodoIdForm === $t->id)
                <form wire:submit.prevent="update({{ $t->id }})" class="flex">
                    @csrf

                    <input type="text" wire:model="text"
                        class="p-2 w-80 mr-4 bg-gray-100 rounded-lg focus:outline-none focus:ring-2 ring-blue-600 transition duration-400 sm:w-36" />


                    <button type="submit" wire:loading.attr="disabled"
                        class=" p-2 hover:bg-blue-500 text-white focus:outline-none focus:ring-2 ring-blue-300 font-semibold rounded-md bg-blue-400 transform rotate-90 "><span
                            class="transform rotate-90 "><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg></span></button>
                </form>
            @endif
</div>
@endif
@endforeach
<div class="mt-4 fix">

    {{ $todo->links() }}
</div>
</div>
