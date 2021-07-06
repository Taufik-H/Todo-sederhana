@extends('dashboard')

@section('content')
    <div class="row-span-auto col-span-7 p-5">
        <livewire:card-count></livewire:card-count>
        <div class="bg-white p-4 w-full mt-5 rounded-md shadow-md mx-auto hidden md:block sm:block">
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-400 font-bold">List Todo</div>
                {{-- form todoadd --}}
                <livewire:todo-create></livewire:todo-create>
            </div>

        </div>
        <livewire:list-todo></livewire:list-todo>
    </div>
    <livewire:card-profile></livewire:card-profile>
@endsection
