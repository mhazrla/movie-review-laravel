@include('layouts.navigation')
<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between flex-row ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Movie Dashboard') }}
            </h2>
            <a href="{{ route('movie.create') }}"
                class=" text-md p-2 mt-[-2] text-white leading-tight bg-blue-500 rounded hover:bg-blue-600 dark:text-gray-200">
                {{ __('Add New Movie') }}
            </a>
        </div>

    </x-slot>
    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-w    hite overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid gap-2 mb-8 md:grid-cols-1 xl:grid-cols-1">
                    @if ($movies->count())
                        @foreach ($movies as $movie)
                            <div class="w-full h-2/3  bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                <div class="grid mb-3 rounded-lg">
                                    <figure
                                        class="flex-col  bg-white rounded-lg   dark:bg-gray-800 dark:border-gray-700">
                                        <figcaption class="flex space-x-3">
                                            <div class="inline-flex">
                                                @if ($movie->thumbnail)
                                                    <img class="rounded-lg" width="20%"
                                                        src="{{ url('/storage/' . $movie->thumbnail) }}">
                                                @endif
                                                <div class="px-3 py-2">
                                                    <a href="{{ route('movie.show', $movie->id) }}"
                                                        class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                                                        {{ ucwords($movie->judul) }}
                                                    </a>

                                                    <p class="my-1 font-light text-sm">{{ $movie->genre->nama }}</p>
                                                    <div
                                                        class="text-sm my-3 font-light text-gray-500 dark:text-gray-400">
                                                        Published
                                                        on
                                                        {{ $movie->created_at->diffForHumans() }}</div>


                                                </div>
                                            </div>
                                            <div class=" inline-flex items-center">
                                                <a href="{{ route('movie.show', $movie->id) }}"
                                                    class="mx-8 text-sm font-medium text-center text-grey-50 ">
                                                    Show
                                                </a>
                                                <a href="{{ route('movie.edit', $movie->id) }}"
                                                    class="mx-8 text-sm font-medium text-center text-grey-50 ">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('movie.destroy', $movie->id) }}"
                                                    class="mt-4"
                                                    onsubmit="return confirm('Are you sure want to delete this data?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="mx-8 text-sm font-medium text-center text-grey-50 ">
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="w-full h-2/3  bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="grid mb-3 rounded-lg">
                                <figure class="flex-col  bg-white rounded-lg   dark:bg-gray-800 dark:border-gray-700">
                                    <figcaption class="flex space-x-3">
                                        <div class="inline-flex">
                                            <div class="px-3 py-2">
                                                No Data
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
