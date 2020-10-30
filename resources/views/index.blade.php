<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Главная
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <span class="text-gray-900 dark:text-white">Список книг</span>
                            </div>
                        </div>

                        <div class="ml-12">
                            @foreach ($books as $book)
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm py-4 border-t">
                                <p class="mb-0 text-lg font-bold">
                                    {{ $book->name }}
                                    <small class="text-sm font-normal">({{ $book->published_at }} г)</small>
                                </p>
                                <p>Автор: {{ $book->author->name }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-6 border-gray-200 dark:border-gray-700 border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <span class="text-gray-900 dark:text-white">Список авторов</span>
                            </div>
                        </div>

                        <div class="ml-12">
                            @foreach ($authors as $author)
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm py-4 border-t">
                                <p class="mb-0 text-lg font-bold">
                                    {{ $author->name }}
                                    <small class="text-sm font-normal">({{ $author->country }})</small>
                                </p>
                                <p>Количество книг: {{ $author->books->count() }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
