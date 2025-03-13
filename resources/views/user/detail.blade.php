<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="/assets/js/aos.js"></script>

<x-layout.user-default>
    <div class="min-h-screen mt-16 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 font-nunito">

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Job Details Section -->
                <div class="lg:col-span-2" data-aos="fade-up" data-aos-duration="2000">

                    <!-- Job Banner -->
                    <div class="bg-white rounded-lg mb-4">
                        <img src="{{ asset('storage/' . $lowongan->brosur) }}" alt="We are hiring"
                            class="w-full max-w-lg mx-auto rounded-lg">
                    </div>

                    <!-- Job Information -->
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg px-4 pt-4 pb-0">
                            <h2 class="text-2xl font-semibold mb-2 font-inter text-green-500">
                                {{ $lowongan->posisi->nama_posisi }}</h2>
                        </div>

                        <div class="bg-white rounded-lg p-4">
                            <h2 class="text-xl font-semibold mb-2">Kualifikasi:</h2>
                            <p class="text-gray-600">
                                {{ $lowongan->kualifikasi }}
                            </p>
                        </div>

                        <div class="bg-white rounded-lg p-4">
                            <h2 class="text-xl font-semibold mb-2">Deskripsi Pekerjaan:</h2>
                            <p class="text-gray-600">
                                {{ $lowongan->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Sidebar (Placed first on mobile) -->
                <div class="lg:order-last" data-aos="fade-left" data-aos-duration="2000">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-xl font-semibold mb-4 text-center lg:text-left">Informasi Umum</h2>

                        <div class="space-y-4 text-center lg:text-left">
                            <div>
                                <h3 class="text-sm text-gray-500">Departemen</h3>
                                <p class="font-medium">{{ $lowongan->departemen->nama_departemen }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm text-gray-500">Lokasi</h3>
                                <p class="font-medium">{{ $lowongan->lokasi }}</p>
                            </div>
                            <div>
                                <h3 class="text-sm text-gray-500">Tanggal Buka</h3>
                                <p class="font-medium">
                                    {{ \Carbon\Carbon::parse($lowongan->tgl_buka)->translatedFormat('j F Y') }}</p>
                            </div>

                            <div>
                                <h3 class="text-sm text-gray-500">Tanggal Tutup</h3>
                                <p class="font-medium">
                                    {{ \Carbon\Carbon::parse($lowongan->tgl_tutup)->translatedFormat('j F Y') }}</p>
                            </div>
                        </div>

                        @if (Auth::check())
                            <a href="{{ route('apply', ['slug_uuid' => $lowongan->slug . '_' . $lowongan->uuid]) }}"
                                class="mt-6 flex items-center justify-center gap-2 w-full btn btn-success text-white font-semibold py-3 rounded-lg text-center transition duration-300 hover:scale-95">
                                APPLY LOWONGAN
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-white bg-opacity-30 rounded-full">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12.4697 8.46967C12.7626 8.17678 13.2374 8.17678 13.5303 8.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L13.5303 15.5303C13.2374 15.8232 12.7626 15.8232 12.4697 15.5303C12.1768 15.2374 12.1768 14.7626 12.4697 14.4697L14.1893 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H14.1893L12.4697 9.53033C12.1768 9.23744 12.1768 8.76256 12.4697 8.46967Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        @else
                            <a href="{{ route('login.index') }}"
                                class="mt-6 flex items-center justify-center gap-2 w-full btn btn-success text-white font-semibold py-3 rounded-lg text-center transition duration-300 hover:scale-95">
                                LOGIN UNTUK MELAMAR
                                <span
                                    class="flex items-center justify-center w-8 h-8 bg-white bg-opacity-30 rounded-full">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="flex justify-center my-6" data-aos="fade-right" data-aos-duration="800">
                <a href="/career"
                    class="btn btn-success inline-flex items-center text-white transform transition duration-300 hover:scale-105 group px-4 py-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2 transform transition-all duration-300 group-hover:-translate-x-2"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Kembali ke Lowongan
                </a>
            </div>
        </div>
    </div>
</x-layout.user-default>

<script>
    AOS.init();
</script>
