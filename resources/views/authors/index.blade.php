<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Авторы
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="xl:w-1/2 sm:w-3/4 w-10/12 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold w-full flex justify-between">
                        <span class="text-gray-900 dark:text-white">Список авторов</span>
                        <a href="/authors/create" title="Добавить автора" class="bg-blue-500 btn-sm hover:bg-blue-700 text-white font-bold px-2 rounded-full">+</a>
                    </div>
                </div>

                <div class="ml-12">
                    @foreach ($authors as $author)
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm py-4 border-t grid grid-cols-6 gap-3">
                        <img class="md:col-span-1 col-span-2 rounded" src="/storage/{{ $author->photo }}" alt="{{ $author->name }}">
                        <div class="md:col-span-5 col-span-4">
                            <p class="mb-0 text-xl font-bold">
                                <a href="/authors/{{ $author->id }}">{{ $author->name }}</a>
                                <small class="text-sm font-normal">({{ $author->country }})</small>
                            </p>
                            <p class="truncate h-full">{{ $author->information }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
