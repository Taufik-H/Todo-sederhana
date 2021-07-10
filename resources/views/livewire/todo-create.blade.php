<div>
    <form wire:submit.prevent="TodoCreate">
        @csrf
        <div class="flex w-full justify-center items-end bg-white rounded-md p-2">
            <div class="relative mr-4  w-2/4 md:w-full text-left ">
                <label for="hero-field" class="leading-7 text-sm text-indigo-600 font-semibold">New
                    Todo</label>
                <input type="text" id="title" name="title" wire:model="title" required
                    class="w-full bg-indigo-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-2  focus:border-indigo-500 text-base border-0 text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit"
                class="inline-flex text-white  border-0 py-2 px-6 transition duration-200 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-indigo-800"><svg
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg></button>
        </div>
    </form>

</div>
