<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Редактирование: {{ $author->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-10/12 lg:w-1/3 md:w-1/2 sm:w-3/4 mx-auto sm:px-6 lg:px-8 px-3 bg-white shadow py-6">
            <form action="/authors/{{ $author->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mx-auto">
                    <label for="name" class="block text-sm font-medium leading-5 text-gray-700">Имя автора</label>
                    <input id="name" name="name" value="{{ $author->name }}" required class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div class="mt-6 mx-auto">
                    <label for="about" class="block text-sm leading-5 font-medium text-gray-700">
                        Информация
                    </label>
                    <div class="rounded-md shadow-sm">
                        <textarea id="about" name="information" rows="5" class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Информация об авторе">{{ $author->information }}</textarea>
                    </div>
                </div>
                <div class="mt-6 mx-auto">
                    <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Страна</label>
                    <input id="country" name="country" maxlength="3" value="{{ $author->country }}" required class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Например, ENG">
                </div>
                <div class="mt-6 mx-auto">
                    <label for="photo" class="block text-sm leading-5 font-medium text-gray-700">
                        Фото
                    </label>
                    <input type="file" name="photo" id="photo" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                        Изменить
                    </button>
                    <a href="/authors/{{ $author->id }}" class="ml-2 inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">
                        Отмена
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
