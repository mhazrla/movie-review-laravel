@include('layouts.navigation')
<x-app-layout>
    @livewireStyles
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ucwords($review->movie->judul) }}
        </h2>
    </x-slot>
    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-w hite overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Container for demo purpose -->
                <div class="container mx-auto md:px-6  bg-white">
                    <!-- Section: Design Block -->
                    <section class="mb-6 p-5 border-b-2">
                        <img src="{{ url('storage/' . $review->movie->thumbnail) }}"
                            class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />

                        <div class="mb-6 flex items-center">

                            <div>
                                <span> Release pada tahun <u>{{ $review->movie->tahun }}</u> by </span>
                                <a href="#!" class="font-medium">{{ $review->movie->sutradara }}</a>
                            </div>
                        </div>

                        <h1 class="mb-6 text-4xl font-bold">
                            Sinopsis
                        </h1>

                        <p>
                            {{ $review->movie->sinopsis }}
                        </p>


                    </section>

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-12 mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Review
                                    by Admin</h2>
                                <span class="text-xs  text-indigo-900 tracking-widest font-medium title-font mb-1">
                                    {{ $review->created_at->diffForHumans() }}</span>
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                                    {{ $review->section_1_title }}</h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $review->section_1_desc }}</p>
                            </div>
                            @if ($review->section_2_title && $review->section_2_desc !== null)
                                <div class="flex flex-col text-center w-full mb-20">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                                        {{ $review->section_2_title }}</h1>
                                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $review->section_2_desc }}
                                    </p>
                                </div>
                            @endif
                            @if ($review->section_3_title && $review->section_3_desc !== null)
                                <div class="flex flex-col text-center w-full mb-20">
                                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                                        {{ $review->section_3_title }}</h1>
                                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $review->section_3_desc }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </section>

                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
            </div>
        </div>
    </div>
    @livewire('review-ratings', ['review' => $review], key($review->id))
    @livewireScripts
</x-app-layout>
