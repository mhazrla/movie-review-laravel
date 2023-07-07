<x-app-layout>
    <x-slot name="header">
        <div class="relative isolate px-6 pt-6 lg:px-8">
            @include('layouts.navigation')

            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>

            <div class="py-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Indonesian Movies Review') }}
                </h2>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">
                                    @forelse ($indoMovies as $indo)
                                        <div class="p-4 md:w-1/3">
                                            <div
                                                class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                                    src="{{ url('storage/' . $indo->movie->thumbnail) }}">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        {{ $indo->movie->genre->nama }}</h2>
                                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                                        {{ $indo->movie->judul }}</h1>
                                                    <p class="leading-relaxed mb-3">
                                                        {{ $indo->movie->sinopsis }}</p>
                                                    <div class="flex items-center flex-wrap ">
                                                        <a href="{{ route('review.show', $indo->review->id) }}"
                                                            class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Read
                                                            More
                                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5l7 7-7 7"></path>
                                                            </svg>
                                                        </a>
                                                        <span
                                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                            <svg class="w-4 h-4 mr-1" stroke="currentColor"
                                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" viewBox="0 0 24 24">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg>{{ $indo->review->ratings->count() }}
                                                        </span>
                                                        <span
                                                            class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                            <svg class="w-4 h-4 mr-1" stroke="currentColor"
                                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                                </path>
                                                            </svg>{{ $indo->review->ratings->count() }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        There is no Indonesian Movie
                                    @endforelse

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="py-12">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Western Movies Review') }}
                </h2>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">
                                    @forelse ($westernMovies as $western)
                                        <div class="p-4 md:w-1/3">
                                            <div
                                                class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                                    src="{{ url('storage/' . $western->thumbnail) }}">
                                                <div class="p-6">
                                                    <h2
                                                        class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                        {{ $western->genre->nama }}</h2>
                                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                                        {{ $western->judul }}</h1>
                                                    <p class="leading-relaxed mb-3">
                                                        {{ $western->sinopsis }}</p>
                                                    <div class="flex items-center flex-wrap ">
                                                        <a href="{{ route('review.show', $western->review->id) }}"
                                                            class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Read
                                                            More
                                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14"></path>
                                                                <path d="M12 5l7 7-7 7"></path>
                                                            </svg>
                                                        </a>
                                                        <span
                                                            class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                                            <svg class="w-4 h-4 mr-1" stroke="currentColor"
                                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" viewBox="0 0 24 24">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3">
                                                                </circle>
                                                            </svg>{{ $western->review->ratings->count() }}
                                                        </span>
                                                        <span
                                                            class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                            <svg class="w-4 h-4 mr-1" stroke="currentColor"
                                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                                </path>
                                                            </svg>{{ $western->review->ratings->count() }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty
                                        There is no Western Movie
                                    @endforelse

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>
