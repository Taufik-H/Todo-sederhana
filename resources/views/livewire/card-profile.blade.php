<div>
    <div class="row-span-auto justify-center p-5 col-span space-y-5 hidden sm:block md:block xl:block">
        <div class="w-32 h-21 flex    md:w-72 p-5 bg-white rounded-md shadow-md    ">
            <img class="h-16 w-16  rounded-full object-cover justify-start mx-auto "
                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            <div class="  hidden sm:hidden md:block mr-10">
                <p class="font-bold text-md">{{ Auth::user()->name }}</p>
                <p class=" font-light text-sm text-gray-400 ">{{ Auth::user()->email }}</p>
            </div>
        </div>

    </div>
</div>
