<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Книга
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="xl:w-1/2 sm:w-3/4 w-10/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold w-full flex justify-between">
                        <span class="text-gray-900 dark:text-white">О книге</span>
                        <a href="/books/{{ $book->id }}/edit" title="Изменить данные" class="bg-blue-500 btn-sm hover:bg-blue-700 text-white font-bold px-2 text-sm rounded-full">Изменить</a>
                    </div>
                </div>
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm py-4 border-t">
                        <div class="flex-col text-center">
                            <img class="lg:w-1/4 md:w-1/3 w-1/2 rounded mx-auto" src="/storage/{{ $book->image }}" alt="{{ $book->name }}">
                            <p class="mt-4 font-bold text-xl">{{ $book->name }}</p>
                            <p>{{ $book->author->name }}</p>
                            <small class="text-xs font-normal">({{ $book->genre->name }}, {{ $book->published_at}} г)</small>
                            <textarea style="resize: none" rows="15" disabled class="static mt-4 h-auto w-full text-justify p-3">{{ $book->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
