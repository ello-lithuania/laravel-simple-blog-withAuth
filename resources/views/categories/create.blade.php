<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('categories.store')}}">
                        @csrf
                        Name<br/>
                        <input type="text" class="bg-slate-200 mb-2" name="name"/>
                        <br/>
                        <button class="bg-red-800 text-white px-4 py-2" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
