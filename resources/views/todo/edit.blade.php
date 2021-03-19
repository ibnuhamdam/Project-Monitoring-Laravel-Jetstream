<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route('todo.update' , $todo->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="w-full">
                        <label for="todo" class="block text-sm font-bold">
                            TODO
                          </label>
                          <input type="text" name="todo" id="todo" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $todo->todo }}">


                          <button type="submit" class="inline-block justify-center mt-2 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                            Save
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>