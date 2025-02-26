@if ($paginator->hasPages())
    <ul
        class="flex justify-center items-center space-x-1 rtl:space-x-reverse m-auto mb-4 font-inter font-extralight text-base">
        {{-- First Page --}}
        <li>
            <a href="{{ $paginator->url(1) }}"
                class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                {{-- First Page Icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.488 4.43057C17.8025 4.70014 17.8389 5.17361 17.5693 5.48811L11.9877 12L17.5693 18.5119C17.8389 18.8264 17.8025 19.2999 17.488 19.5695C17.1735 19.839 16.7 19.8026 16.4305 19.4881L10.4305 12.4881C10.1897 12.2072 10.1897 11.7928 10.4305 11.5119L16.4305 4.51192C16.7 4.19743 17.1735 4.161 17.488 4.43057ZM13.4881 4.43067C13.8026 4.70024 13.839 5.17372 13.5694 5.48821L7.98781 12.0001L13.5694 18.512C13.839 18.8265 13.8026 19.3 13.4881 19.5696C13.1736 19.8391 12.7001 19.8027 12.4306 19.4882L6.43056 12.4882C6.18981 12.2073 6.18981 11.7929 6.43056 11.512L12.4306 4.51202C12.7001 4.19753 13.1736 4.16111 13.4881 4.43067Z"
                        fill="currentColor" />
                </svg>

            </a>
        </li>

        {{-- Previous Page --}}
        <li>
            @if ($paginator->onFirstPage())
                <span
                    class="opacity-50 flex justify-center font-semibold p-2 rounded-full bg-white-light text-dark dark:text-white-light dark:bg-[#191e3a]">
                    {{-- Previous Page Icon --}}
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.4881 4.43057C15.8026 4.70014 15.839 5.17361 15.5694 5.48811L9.98781 12L15.5694 18.5119C15.839 18.8264 15.8026 19.2999 15.4881 19.5695C15.1736 19.839 14.7001 19.8026 14.4306 19.4881L8.43056 12.4881C8.18981 12.2072 8.18981 11.7928 8.43056 11.5119L14.4306 4.51192C14.7001 4.19743 15.1736 4.161 15.4881 4.43057Z"
                            fill="currentColor" />
                    </svg>

                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.4881 4.43057C15.8026 4.70014 15.839 5.17361 15.5694 5.48811L9.98781 12L15.5694 18.5119C15.839 18.8264 15.8026 19.2999 15.4881 19.5695C15.1736 19.839 14.7001 19.8026 14.4306 19.4881L8.43056 12.4881C8.18981 12.2072 8.18981 11.7928 8.43056 11.5119L14.4306 4.51192C14.7001 4.19743 15.1736 4.161 15.4881 4.43057Z"
                            fill="currentColor" />
                    </svg>

                </a>
            @endif
        </li>

        {{-- Page Numbers --}}
        @php
            $totalPages = $paginator->lastPage();
            $currentPage = $paginator->currentPage();
        @endphp

        {{-- Show first page --}}
        <li>
            <a href="{{ $paginator->url(1) }}"
                class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition {{ $currentPage == 1 ? 'bg-green-400 text-white' : 'bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500' }}">
                1
            </a>
        </li>

        {{-- Show "..." if current page is greater than 3 --}}
        @if ($currentPage > 3)
            <li><span class="px-2">...</span></li>
        @endif

        {{-- Show current page and one before & after it --}}
        @for ($i = max(2, $currentPage - 1); $i <= min($totalPages - 1, $currentPage + 1); $i++)
            <li>
                <a href="{{ $paginator->url($i) }}"
                    class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition {{ $i == $currentPage ? 'bg-green-400 text-white' : 'bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor

        {{-- Show "..." if not close to last page --}}
        @if ($currentPage < $totalPages - 2)
            <li><span class="px-2">...</span></li>
        @endif

        {{-- Show last page --}}
        <li>
            <a href="{{ $paginator->url($totalPages) }}"
                class="flex justify-center font-semibold px-3.5 py-2 rounded-full transition {{ $currentPage == $totalPages ? 'bg-green-400 text-white' : 'bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500' }}">
                {{ $totalPages }}
            </a>
        </li>

        {{-- Next Page --}}
        <li>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                    {{-- Next Page Icon --}}
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z"
                            fill="currentColor" />
                    </svg>

                </a>
            @endif
        </li>

        {{-- Last Page --}}
        <li>
            <a href="{{ $paginator->url($totalPages) }}"
                class="flex justify-center font-semibold p-2 rounded-full transition bg-white-light text-dark hover:text-white hover:bg-green-400 dark:text-white-light dark:bg-[#191e3a] dark:hover:bg-green-500">
                {{-- Last Page Icon --}}
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.51192 4.43057C6.82641 4.161 7.29989 4.19743 7.56946 4.51192L13.5695 11.5119C13.8102 11.7928 13.8102 12.2072 13.5695 12.4881L7.56946 19.4881C7.29989 19.8026 6.82641 19.839 6.51192 19.5695C6.19743 19.2999 6.161 18.8264 6.43057 18.5119L12.0122 12L6.43057 5.48811C6.161 5.17361 6.19743 4.70014 6.51192 4.43057ZM10.5121 4.43068C10.8266 4.16111 11.3001 4.19753 11.5697 4.51202L17.5697 11.512C17.8104 11.7929 17.8104 12.2073 17.5697 12.4882L11.5697 19.4882C11.3001 19.8027 10.8266 19.8391 10.5121 19.5696C10.1976 19.3 10.1612 18.8265 10.4308 18.512L16.0124 12.0001L10.4308 5.48821C10.1612 5.17372 10.1976 4.70024 10.5121 4.43068Z"
                        fill="currentColor" />
                </svg>

            </a>
        </li>
    </ul>
@endif
