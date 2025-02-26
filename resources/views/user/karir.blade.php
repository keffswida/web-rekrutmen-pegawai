<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="/assets/js/aos.js"></script>

<x-layout.user-default>
    <div class="relative w-fit mx-auto mb-12">
        <img src="{{ asset('assets/images/healthcare4.jpg') }}" alt="Banner Image" class="max-w-full h-auto shadow-lg"
            data-aos="fade-in" data-aos-duration="1000">
        <div class="absolute inset-0 flex flex-col justify-center items-start text-left bg-transparent ml-16">
            <h1 class="text-green-800 text-1xl sm:text-3xl md:text-5xl font-bold font-inter max-w-[50%]"
                data-aos="fade-right" data-aos-duration="1000">
                Gabung dan Wujudkan Dedikasimu!
            </h1>
        </div>
    </div>

    <div class="container py-8"></div>

    <div class="container mx-auto px-8 py-8">

        <h2 class="text-green-700 font-bold text-xl md:text-3xl text-center font-inter relative mb-12"
            data-aos="fade-up" data-aos-duration="1000">
            DAFTAR LOWONGAN
            <span class="block mt-2 w-40 h-1 bg-green-400 mx-auto rounded-full" data-aos="fade-left"
                data-aos-duration="1000"></span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-6" data-aos="fade-up"
            data-aos-duration="1000">
            @foreach ($lowongan as $l)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <div class="p-4">
                        @if (!empty($l->brosur))
                            <img src="{{ Storage::url($l->brosur) }}" alt="Brosur Lowongan"
                                class="w-auto h-auto object-cover rounded-t-lg">
                        @else
                            <p>Tidak ada brosur</p>
                        @endif
                        <div class="p-4">
                            <a href="{{ route('career.show', $l->id) }}"
                                class="text-green-500 hover:text-green-700 font-semibold text-lg mb-5 font-inter">
                                {{ $l->posisi->nama_posisi }}
                            </a>
                            <p class="text-gray-600 text-sm mb-4 font-poppins">
                                {{ $l->deskripsi }}
                            </p>
                            {{-- <a href="{{ route('lowongan.show', $job->id) }}" --}}
                            <a href="{{ route('career.show', $l->id) }}"
                                class="flex items-center text-green-600 hover:text-green-700 group">
                                <span class="text-sm font-inter italic">Baca Selengkapnya</span>
                                <svg viewBox="0 0 24 24"
                                    class="w-4 h-4 ml-1 transform transition-all duration-300 group-hover:translate-x-2"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        {{-- <div class="flex justify-center items-center space-x-4 mt-8">
            {{ $lowongans->links() }}
        </div> --}}
        {{-- <ul class="flex justify-center items-center space-x-1 rtl:space-x-reverse m-auto mb-4">
            <li>
                <button type="button"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.488 4.43057C17.8025 4.70014 17.8389 5.17361 17.5693 5.48811L11.9877 12L17.5693 18.5119C17.8389 18.8264 17.8025 19.2999 17.488 19.5695C17.1735 19.839 16.7 19.8026 16.4305 19.4881L10.4305 12.4881C10.1897 12.2072 10.1897 11.7928 10.4305 11.5119L16.4305 4.51192C16.7 4.19743 17.1735 4.161 17.488 4.43057ZM13.4881 4.43067C13.8026 4.70024 13.839 5.17372 13.5694 5.48821L7.98781 12.0001L13.5694 18.512C13.839 18.8265 13.8026 19.3 13.4881 19.5696C13.1736 19.8391 12.7001 19.8027 12.4306 19.4882L6.43056 12.4882C6.18981 12.2073 6.18981 11.7929 6.43056 11.512L12.4306 4.51202C12.7001 4.19753 13.1736 4.16111 13.4881 4.43067Z"
                            fill="#1C274C" />
                    </svg>
                </button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.4881 4.43057C15.8026 4.70014 15.839 5.17361 15.5694 5.48811L9.98781 12L15.5694 18.5119C15.839 18.8264 15.8026 19.2999 15.4881 19.5695C15.1736 19.839 14.7001 19.8026 14.4306 19.4881L8.43056 12.4881C8.18981 12.2072 8.18981 11.7928 8.43056 11.5119L14.4306 4.51192C14.7001 4.19743 15.1736 4.161 15.4881 4.43057Z"
                            fill="#1C274C" />
                    </svg>
                </button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">1</button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-green-400 text-white dark:text-white-light dark:bg-primary">2</button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">3</button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z"
                            fill="#1C274C" />
                    </svg>
                </button>
            </li>
            <li>
                <button type="button"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.51192 4.43057C6.82641 4.161 7.29989 4.19743 7.56946 4.51192L13.5695 11.5119C13.8102 11.7928 13.8102 12.2072 13.5695 12.4881L7.56946 19.4881C7.29989 19.8026 6.82641 19.839 6.51192 19.5695C6.19743 19.2999 6.161 18.8264 6.43057 18.5119L12.0122 12L6.43057 5.48811C6.161 5.17361 6.19743 4.70014 6.51192 4.43057ZM10.5121 4.43068C10.8266 4.16111 11.3001 4.19753 11.5697 4.51202L17.5697 11.512C17.8104 11.7929 17.8104 12.2073 17.5697 12.4882L11.5697 19.4882C11.3001 19.8027 10.8266 19.8391 10.5121 19.5696C10.1976 19.3 10.1612 18.8265 10.4308 18.512L16.0124 12.0001L10.4308 5.48821C10.1612 5.17372 10.1976 4.70024 10.5121 4.43068Z"
                            fill="#1C274C" />
                    </svg>
                </button>
            </li>
        </ul> --}}
        {{-- @if ($lowongans->hasPages())
            <ul class="flex justify-center items-center space-x-1 rtl:space-x-reverse m-auto mb-4">
                <li>
                    <a href="{{ $lowongans->url(1) }}"
                        class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.488 4.43057C17.8025 4.70014 17.8389 5.17361 17.5693 5.48811L11.9877 12L17.5693 18.5119C17.8389 18.8264 17.8025 19.2999 17.488 19.5695C17.1735 19.839 16.7 19.8026 16.4305 19.4881L10.4305 12.4881C10.1897 12.2072 10.1897 11.7928 10.4305 11.5119L16.4305 4.51192C16.7 4.19743 17.1735 4.161 17.488 4.43057Z"
                                fill="#1C274C" />
                        </svg>
                    </a>
                </li>

                @if ($lowongans->onFirstPage())
                    <li class="opacity-50">
                        <span
                            class="flex justify-center font-semibold p-2 rounded-full bg-white-light text-dark dark:text-white-light dark:bg-[#191e3a]">
                            ❮
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $lowongans->previousPageUrl() }}"
                            class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                            ❮
                        </a>
                    </li>
                @endif

                @foreach ($lowongans->links()->elements as $element)
                    @if (is_string($element))
                        <li class="opacity-50">
                            <span
                                class="flex justify-center font-semibold px-3.5 py-2 rounded-full bg-white-light text-dark dark:text-white-light dark:bg-[#191e3a]">
                                {{ $element }}
                            </span>
                        </li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li>
                                <a href="{{ $url }}"
                                    class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition {{ $page == $lowongans->currentPage() ? 'bg-green-400 text-white' : 'bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500' }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach
                    @endif
                @endforeach

                @if ($lowongans->hasMorePages())
                    <li>
                        <a href="{{ $lowongans->nextPageUrl() }}"
                            class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                            ❯
                        </a>
                    </li>
                @else
                    <li class="opacity-50">
                        <span
                            class="flex justify-center font-semibold p-2 rounded-full bg-white-light text-dark dark:text-white-light dark:bg-[#191e3a]">
                            ❯
                        </span>
                    </li>
                @endif

                <li>
                    <a href="{{ $lowongans->url($lowongans->lastPage()) }}"
                        class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.51192 4.43057C6.82641 4.161 7.29989 4.19743 7.56946 4.51192L13.5695 11.5119C13.8102 11.7928 13.8102 12.2072 13.5695 12.4881L7.56946 19.4881C7.29989 19.8026 6.82641 19.839 6.51192 19.5695C6.19743 19.2999 6.161 18.8264 6.43057 18.5119L12.0122 12L6.43057 5.48811C6.161 5.17361 6.19743 4.70014 6.51192 4.43057Z"
                                fill="#1C274C" />
                        </svg>
                    </a>
                </li>
            </ul>
        @endif --}}

        <div class="mt-4 flex justify-center">
            {{ $lowongan->links('pagination::custom') }}
        </div>


    </div>

    <script>
        AOS.init();
    </script>

</x-layout.user-default>
