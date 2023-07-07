@include('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            {{ __('Edit Review of ' . $review->movie->judul) }}
        </h2>

    </x-slot>

    <x-auth-session-status class="mb-4" :status="session(['status'])" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <img src="{{ url('storage/' . $review->movie->thumbnail) }}"
                    class="mb-6  w-1/2 rounded-lg shadow-lg dark:shadow-black/20 " alt="image" />
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form class="space-y-4 text-gray-700" method="post"
                        action="{{ route('review.update', $review->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        {{-- title --}}
                        <input name="movie_id" placeholder="Movie Title"
                            value="{{ old('movie_id', $review->movie_id) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            type="hidden" />

                        {{-- Section 1 --}}
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 1 Title</label>
                                <input name="section_1_title" placeholder="Section 1 title"
                                    value="{{ old('section_1_title', $review->section_1_title) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('section_1_title')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 1 Description</label>
                                <textarea id="section_1_desc" name="section_1_desc" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Section 1 Description...">{{ old('section_1_desc', $review->section_1_desc) }}</textarea>
                                <div class="my-2 ">
                                    @error('section_1_desc')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Section 2 --}}
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 2 Title</label>
                                <input name="section_2_title" placeholder="Section 2 title"
                                    value="{{ old('section_2_title', $review->section_2_title) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('section_2_title')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 2 Description</label>
                                <textarea id="section_2_desc" name="section_2_desc" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Section 2 Description...">{{ old('section_2_desc', $review->section_2_desc) }}</textarea>
                                <div class="my-2 ">
                                    @error('section_2_desc')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        {{-- Section 3 --}}
                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 3 Title</label>
                                <input name="section_3_title" placeholder="Section 3 title"
                                    value="{{ old('section_3_title', $review->section_3_title) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    type="text" />
                                <div class="my-2 ">
                                    @error('section_3_title')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-full">
                                <label class="block mb-1" for="formGridCode_card">Section 3 Description</label>
                                <textarea id="section_3_desc" name="section_3_desc" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Section 3 Description...">{{ old('section_3_desc', $review->section_3_desc) }}</textarea>
                                <div class="my-2 ">
                                    @error('section_3_desc')
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
