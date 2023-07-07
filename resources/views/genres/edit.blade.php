@include('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Edit Genre') }}
        </h2>

    </x-slot>

    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form class="space-y-4 text-gray-700" method="post" action="{{ route('genre.update', $genre->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- nama --}}
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Genre Name</label>
                                <input name="nama" placeholder="Genre Name" value="{{ old('nama', $genre->nama) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('nama')
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
