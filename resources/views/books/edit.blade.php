<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Редактирование: {{ $book->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-10/12 lg:w-1/3 md:w-1/2 sm:w-3/4 mx-auto sm:px-6 lg:px-8 px-3 bg-white shadow py-6">
            <form action="/books/{{ $book->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mx-auto">
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Название книги</label>
                    <input id="name" name="name" value="{{ $book->name }}" required class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div class="mt-6 mx-auto">
                    <label for="description" class="block text-sm leading-5 font-medium text-gray-700">
                        Описание
                    </label>
                    <div class="rounded-md shadow-sm">
                        <textarea id="description" required name="description" rows="5" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Информация об авторе">{{ $book->description }}</textarea>
                    </div>
                </div>
                <div class="mt-6 mx-auto">
                    <label for="author_id" class="block text-sm font-medium leading-5 text-gray-700">Автор</label>
                    <select id="author_id" name="author_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        @foreach ($authors as $author)
                        <option @if ($author->id === $book->author_id) selected @endif value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-6 mx-auto">
                    <label for="genre_id" class="block text-sm font-medium leading-5 text-gray-700">Жанр</label>
                    <select id="genre_id" name="genre_id" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        @foreach ($genres as $genre)
                        <option @if ($genre->id === $book->genre_id) selected @endif value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-6 mx-auto">
                    <label for="published_at" class="block text-sm font-medium leading-5 text-gray-700">Год издания</label>
                    <input id="published_at" value="{{ $book->published_at }}" type="number" min="1500" max="2100" name="published_at" required class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div class="mt-6 mx-auto">
                    <label for="image" class="block text-sm leading-5 font-medium text-gray-700">
                        Изображение
                    </label>
                    <input type="file" name="image" id="image" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                        Изменить
                    </button>
                    <a href="/books" class="ml-2 inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
