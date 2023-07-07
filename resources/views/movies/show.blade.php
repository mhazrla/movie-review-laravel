@include('layouts.navigation')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ucwords($movie->judul) }}
        </h2>
    </x-slot>
    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-w hite overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Container for demo purpose -->
                <div class="container my-24 mx-auto md:px-6">
                    <!-- Section: Design Block -->
                    <section class="mb-32 ">
                        <img src="{{ url('storage/' . $movie->thumbnail) }}"
                            class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />

                        <div class="mb-6 flex items-center">

                            <div>
                                <span> Release pada tahun <u>{{ $movie->tahun }}</u> by </span>
                                <a href="#!" class="font-medium">{{ $movie->sutradara }}</a>
                            </div>
                        </div>

                        <h1 class="mb-6 text-4xl font-bold">
                            Sinopsis
                        </h1>

                        <p>
                            {{ $movie->sinopsis }}
                        </p>
                    </section>
                    <!-- Section: Design Block -->
                </div>
                <!-- Container for demo purpose -->
            </div>
        </div>
    </div>
</x-app-layout>
