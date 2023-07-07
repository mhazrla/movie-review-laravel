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

            <div class="py-4">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-24 mx-auto">
                                <div class="flex flex-wrap -m-4">
                                    <section class="text-gray-600 body-font">
                                        <div class="container px-5 py-12 mx-auto">
                                            <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="inline-block w-8 h-8 text-gray-400 mb-8"
                                                    viewBox="0 0 975.036 975.036">
                                                    <path
                                                        d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                                                    </path>
                                                </svg>
                                                <p class="leading-relaxed text-lg">Kami selalu berusaha untuk tetap
                                                    netral dan jujur dalam menyampaikan pendapat kami. Meskipun kami
                                                    memiliki preferensi pribadi, kami berusaha untuk menghadirkan sudut
                                                    pandang yang obyektif dan memberikan penilaian yang adil kepada
                                                    setiap film yang kami tinjau.
                                                </p>
                                                <p class="leading-relaxed text-lg">
                                                    Kami juga menghargai pendapat pembaca dan memberikan ruang untuk
                                                    diskusi melalui kolom komentar atau fitur lainnya. Kami ingin
                                                    membuka dialog yang sehat dan mendalam tentang dunia film, di mana
                                                    berbagai pandangan dan pendapat dapat disampaikan.
                                                </p>
                                                <p class="leading-relaxed text-lg">
                                                    Dengan dedikasi kami untuk memberikan ulasan film yang berkualitas,
                                                    kami berharap dapat memberikan panduan yang berguna bagi pembaca
                                                    dalam memilih film yang ingin ditonton.
                                                </p>
                                                <span
                                                    class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                                                <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">
                                                    Administrator</h2>
                                                {{-- <p class="text-gray-500">Senior Product Designer</p> --}}
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>



        </div>
    </x-slot>


</x-app-layout>
