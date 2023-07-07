@include('layouts.navigation')
<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between flex-row ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reviews Dashboard') }}
            </h2>
            <a href="{{ route('review.create') }}"
                class=" text-md p-2 mt-[-2] text-white leading-tight bg-blue-500 rounded hover:bg-blue-600 dark:text-gray-200">
                {{ __('Add New Review') }}
            </a>
        </div>

    </x-slot>
    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-w    hite overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid gap-2 mb-8 md:grid-cols-1 xl:grid-cols-1">
                    @if ($reviews->count())
                        @foreach ($reviews as $review)
                            <div class="w-full h-2/3  bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                <div class="grid mb-3 rounded-lg">
                                    <figure
                                        class="flex-col  bg-white rounded-lg   dark:bg-gray-800 dark:border-gray-700">
                                        <figcaption class="flex space-x-3 justify-between ">
                                            <div class="inline-flex ">

                                                <div class="px-3 py-2">
                                                    <a href="{{ route('review.show', $review->id) }}"
                                                        class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                                                        {{ ucwords($review->title) }}
                                                    </a>

                                                    <p class="my-1 font-light text-sm">{{ $review->movie->judul }}</p>
                                                    <div
                                                        class="text-sm my-3 font-light text-gray-500 dark:text-gray-400">
                                                        Published
                                                        on
                                                        {{ $review->created_at->diffForHumans() }}</div>


                                                </div>
                                            </div>
                                            <div class=" inline-flex items-center">
                                                <a href="{{ route('review.show', $review->id) }}"
                                                    class="mx-8 text-sm font-medium text-center text-grey-50 ">
                                                    Show
                                                </a>
                                                <a href="{{ route('review.edit', $review->id) }}"
                                                    class="mx-8 text-sm font-medium text-center text-grey-50 ">
                                                    Edit
                                                </a>

                                                <form method="POST" action="{{ route('review.destroy', $review->id) }}"
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
