@include('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Edit Movie') }}
        </h2>

    </x-slot>

    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form class="space-y-4 text-gray-700" method="post" action="{{ route('movie.update', $movie->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- title --}}
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Title</label>
                                <input name="judul" placeholder="Movie title"
                                    value="{{ old('judul', $movie->judul) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('judul')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            {{-- Sutradara --}}
                            <div class="w-full px-2 md:w-1/2">
                                <label class="block mb-1" for="formGridCode_card">Director</label>
                                <input name="sutradara" placeholder="Movie's Directors"
                                    value="{{ old('sutradara', $movie->sutradara) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('sutradara')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full px-2 md:w-1/2">

                                <div class="mb-6">
                                    <label class="block mb-1" for="formGridCode_card">Release Year</label>
                                    <input name="tahun" placeholder="2020" value="{{ old('tahun', $movie->tahun) }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        type="number" min="1000" />
                                    <div class="my-2 ">
                                        @error('tahun')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">

                            <div class="w-full px-2 md:w-1/2">
                                <label for="genre_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Genre</label>
                                <select id="genre_id" name="genre_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected="" disabled>Choose genre</option>
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}"
                                            @if ($genre->id === $movie->genre_id) selected @endif>
                                            {{ $genre->nama }}</option>
                                    @endforeach
                                </select>

                                <div class="my-2 ">
                                    @error('genre_id')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="w-full px-2 md:w-1/2">

                                <div class="mb-6">
                                    <label for="thumbnail" class="block mb-2 text-sm font-medium ">Upload Image</label>
                                    <input
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        id="thumbnail" type="file" name="thumbnail">

                                    <div class="my-2 ">
                                        @error('thumbnail')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <img class="rounded-lg" width="20%" src="{{ url('/storage/' . $movie->thumbnail) }}">

                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Synopsis</label>
                                <textarea id="sinopsis" name="sinopsis" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Synopsis...">{{ old('sinopsis', $movie->sinopsis) }}</textarea>
                                <div class="my-2 ">
                                    @error('sinopsis')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>




</x-app-layout>
