<x-layout.user-default>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="/assets/js/aos.js"></script>

    <div class="relative w-full mx-auto">
        <img src="{{ asset('assets/images/healthcare.jpg') }}" alt="Banner Image" class="w-full h-auto" data-aos="fadeIn"
            data-aos-duration="1000">

        <div class="absolute inset-0 bg-black opacity-20"></div>

        <div
            class="absolute bottom-0 left-0 w-full h-0 border-l-[calc(100vw/2)] border-r-[calc(100vw/2)] border-b-[50px] border-transparent border-b-white">
        </div>

        <div id="home"
            class="absolute inset-0 flex flex-col items-center md:items-start text-center md:text-left justify-center px-6 sm:px-12 md:px-16 lg:px-24"
            data-aos="fade-right" data-aos-duration="1000">
            <h1 class="text-green-400 text-lg sm:text-2xl md:text-4xl lg:text-5xl font-bold font-inter max-w-lg">
                Karier Medis Terbaikmu, Dimulai dari Sini!
            </h1>
            <p class="text-white text-sm sm:text-lg md:text-xl font-inter max-w-lg mt-3">
                Kami membantu kamu menemukan posisi terbaik yang sesuai dengan keahlian dan passion di bidang medis.
            </p>
            <a href="/career"
                class="btn btn-success px-6 sm:px-10 py-3 text-sm sm:text-lg font-inter rounded-xl gap-2 mt-4 transform transition duration-300 hover:scale-105 group">
                CARI PEKERJAAN IMPIANKU
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="transform transition-all duration-300 group-hover:translate-x-2">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12.4697 8.46967C12.7626 8.17678 13.2374 8.17678 13.5303 8.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L13.5303 15.5303C13.2374 15.8232 12.7626 15.8232 12.4697 15.5303C12.1768 15.2374 12.1768 14.7626 12.4697 14.4697L14.1893 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H14.1893L12.4697 9.53033C12.1768 9.23744 12.1768 8.76256 12.4697 8.46967Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
    </div>

    <div id="about"
        class="flex flex-col md:flex-row items-center justify-between bg-white p-8 md:p-12 lg:p-20 rounded-lg shadow-md">
        <div class="w-full md:w-1/2 px-6 sm:px-12" data-aos="fade-right" data-aos-duration="1000">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-green-500 font-inter mb-4">
                Mengapa RSI Jemursari?
            </h1>
            <p class="text-gray-600 text-base sm:text-lg md:text-xl my-4 font-inter">
                Bersama kami, Anda dapat memberikan dampak positif bagi kehidupan pasien dan masyarakat.
            </p>
            <a href="/about"
                class="btn btn-success inline-flex px-6 sm:px-10 py-3 text-sm sm:text-lg font-inter rounded-full gap-2 mt-2 transform transition duration-300 hover:scale-105 group">
                About Us
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="transform transition-all duration-300 group-hover:translate-x-2">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12.4697 8.46967C12.7626 8.17678 13.2374 8.17678 13.5303 8.46967L16.5303 11.4697C16.8232 11.7626 16.8232 12.2374 16.5303 12.5303L13.5303 15.5303C13.2374 15.8232 12.7626 15.8232 12.4697 15.5303C12.1768 15.2374 12.1768 14.7626 12.4697 14.4697L14.1893 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H14.1893L12.4697 9.53033C12.1768 9.23744 12.1768 8.76256 12.4697 8.46967Z"
                        fill="currentColor" />
                </svg>
            </a>
        </div>
        <div class="w-full md:w-1/2 px-6 sm:px-12 mt-6 md:mt-0" data-aos="fade-left" data-aos-duration="1000">
            <img src="{{ asset('assets/images/workers.jpeg') }}" alt="RSI Jemursari Team"
                class="rounded-full w-full max-w-xs md:max-w-md lg:max-w-lg mx-auto transform transition duration-300 hover:scale-105">
        </div>
    </div>

    <script>
        AOS.init();
    </script>

</x-layout.user-default>
