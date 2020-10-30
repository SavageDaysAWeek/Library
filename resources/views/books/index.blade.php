<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Книги
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="xl:w-1/2 sm:w-3/4 w-10/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold w-full flex justify-between">
                        <span class="text-gray-900 dark:text-white">Список книг</span>
                        <a href="/books/create" title="Добавить книгу" class="bg-blue-500 btn-sm hover:bg-blue-700 text-white font-bold px-2 rounded-full">+</a>
                    </div>
                </div>

                <div class="ml-12">
                    @foreach ($books as $book)
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm py-4 border-t grid grid-cols-6 gap-3">
                        @if ($book->image)
                        <img class="md:col-span-1 col-span-2 rounded" src="/storage/{{ $book->image }}" alt="{{ $book->name }}">
                        @endif
                        <div class="md:col-span-5 col-span-4">
                            <a href="/books/{{ $book->id }}" class="mb-0 text-lg font-bold">{{ $book->name }}</a>
                            <p class="text-sm font-normal">({{ $book->author->name }}, {{ $book->published_at }} г)</p>
                            <p class="mt-2 truncate h-full">{{ $book->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
