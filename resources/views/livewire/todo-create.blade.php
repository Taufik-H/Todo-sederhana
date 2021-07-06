<div>
    <form wire:submit.prevent="TodoCreate" class="flex ">
        @csrf

        <input type="text" required name="title" wire:model="title" placeholder="Tambah Plan Baru..."
            class="p-2  rounded-lg focus:outline-none focus:ring-2 ring-blue-600  transition duration-400 sm:w-36" />
        <button type="submit" wire:loading.attr="disabled"
            class=" p-2 bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 rounded-md text-white mx-4"><svg
                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg></button>
    </form>
</div>
