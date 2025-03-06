<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav x-data="sidebar"
        class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <div class="flex justify-between items-center px-4 py-3">
                <a href="/admin" class="main-logo flex items-center shrink-0">
                    <img class="w-8 ml-[5px] flex-none" src="{{ asset('assets/images/logo_rsi.png') }}" alt="image" />
                    <div class="flex flex-col justify-center items-center ms-4">
                        <span
                            class="text-lg ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle lg:inline dark:text-white-light">E-Recruitment
                        </span>
                        <span
                            class="text-base ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle lg:inline dark:text-white-light">RSI
                            Jemursari
                        </span>
                    </div>
                </a>
                <a href="javascript:;"
                    class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180"
                    @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden p-4 py-0"
                x-data="{ activeDropdown: null }">

                <!-- Dashboard -->
                <li class="menu nav-item">
                    <a href="/admin" class="nav-link group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.33537 7.87495C1.79491 9.00229 1.98463 10.3208 2.36407 12.9579L2.64284 14.8952C3.13025 18.2827 3.37396 19.9764 4.54903 20.9882C5.72409 22 7.44737 22 10.8939 22H13.1061C16.5526 22 18.2759 22 19.451 20.9882C20.626 19.9764 20.8697 18.2827 21.3572 14.8952L21.6359 12.9579C22.0154 10.3208 22.2051 9.00229 21.6646 7.87495C21.1242 6.7476 19.9738 6.06234 17.6731 4.69181L16.2882 3.86687C14.199 2.62229 13.1543 2 12 2C10.8457 2 9.80104 2.62229 7.71175 3.86687L6.32691 4.69181C4.02619 6.06234 2.87583 6.7476 2.33537 7.87495ZM8.2501 17.9998C8.2501 17.5856 8.58589 17.2498 9.0001 17.2498H15.0001C15.4143 17.2498 15.7501 17.5856 15.7501 17.9998C15.7501 18.414 15.4143 18.7498 15.0001 18.7498H9.0001C8.58589 18.7498 8.2501 18.414 8.2501 17.9998Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                    </a>
                </li>
                <!-- ./ Dashboard -->

                <!-- Lowongan -->
                <li class="menu nav-item">
                    <a href="/lowongan" class="nav-link group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.16208 8.49969C2 9.60346 2 11.0495 2 13C2 16.7712 2 18.6569 3.17157 19.8284C4.34315 21 6.22876 21 10 21H14C17.7712 21 19.6569 21 20.8284 19.8284C22 18.6569 22 16.7712 22 13C22 11.0497 22 9.60364 21.8379 8.49989C19.5613 9.97971 18.1021 10.9235 16.7501 11.5047V12.0001C16.7501 12.4143 16.4143 12.7501 16.0001 12.7501C15.5914 12.7501 15.259 12.4231 15.2503 12.0165C13.12 12.5781 10.8802 12.5781 8.74991 12.0165C8.74121 12.4231 8.40883 12.7501 8.00009 12.7501C7.58587 12.7501 7.25009 12.4143 7.25009 12.0001V11.5046C5.89804 10.9234 4.43881 9.97957 2.16208 8.49969Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.5814 2.25L10.561 2.25C10.4474 2.24998 10.3591 2.24997 10.2755 2.25503C9.21507 2.31926 8.28647 2.98855 7.89021 3.97426C7.8588 4.05239 7.80711 4.20756 7.77024 4.31825L7.76636 4.32989C7.66326 4.60981 7.47709 4.85224 7.26157 5.02534C7.03409 5.0327 6.81683 5.0422 6.60915 5.05445C4.96519 5.15144 3.92193 5.42122 3.17157 6.17158C2.92691 6.41624 2.73334 6.69204 2.5802 7.00965C2.63777 7.0293 2.69387 7.05632 2.74721 7.09099C4.8475 8.45617 6.16709 9.31008 7.26356 9.85786C7.33001 9.51166 7.6345 9.25009 8.00009 9.25009C8.4143 9.25009 8.75009 9.58588 8.75009 10.0001V10.458C10.8695 11.0976 13.1306 11.0976 15.2501 10.458V10.0001C15.2501 9.58588 15.5859 9.25009 16.0001 9.25009C16.3657 9.25009 16.6702 9.5117 16.7366 9.85794C17.8331 9.31015 19.1527 8.45623 21.2531 7.09099C21.3064 7.05638 21.3624 7.02939 21.4199 7.00975C21.2667 6.6921 21.0731 6.41626 20.8284 6.17158C20.0781 5.42122 19.0348 5.15144 17.3909 5.05445C17.1937 5.04282 16.9879 5.03367 16.773 5.02648C16.7594 5.01545 16.7458 5.00406 16.7322 4.99231C16.4915 4.78435 16.3033 4.51011 16.2084 4.25288L16.2053 4.24344C16.1694 4.13576 16.1415 4.05195 16.1102 3.97426C15.714 2.98855 14.7854 2.31926 13.725 2.25503C13.6414 2.24997 13.553 2.24998 13.4395 2.25L10.5814 2.25ZM14.8176 4.81569L14.8131 4.80495L14.8082 4.79286L14.8037 4.78091L14.8 4.77097L14.7982 4.76596L14.794 4.75373L14.7902 4.74244L14.7881 4.73617L14.7853 4.72783L14.7831 4.72079L14.7813 4.7151C14.742 4.59708 14.7299 4.56204 14.7185 4.53375C14.5384 4.08571 14.1163 3.78148 13.6343 3.75229C13.602 3.75034 13.5625 3.75 13.4191 3.75H10.5814C10.438 3.75 10.3984 3.75034 10.3662 3.75229C9.88424 3.78148 9.46221 4.08561 9.28204 4.53354L9.2794 4.54052L9.27143 4.56245C9.2648 4.58104 9.25672 4.60429 9.2474 4.63156C9.23088 4.67994 9.21232 4.73546 9.19351 4.79186L9.19168 4.79777L9.18945 4.80481L9.18671 4.81314L9.18462 4.81941L9.18079 4.83071L9.17655 4.84295L9.17477 4.84796L9.17113 4.85791L9.16655 4.86987L9.16168 4.88199L9.15751 4.8919L9.15686 4.89336C9.14293 4.92921 9.12818 4.96498 9.11263 5.00064C9.39625 5 9.69183 5 10 5H14C14.3115 5 14.6101 5 14.8965 5.00066C14.868 4.93956 14.8417 4.87784 14.8176 4.81569Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Lowongan</span>
                        </div>
                    </a>
                </li>
                <!-- ./ Lowongan -->

                <!-- Pelamar -->
                <li class="menu nav-item">
                    <a href="/pelamar" class="nav-link group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z"
                                    fill="currentColor" />
                                <path
                                    d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z"
                                    fill="currentColor" />
                                <path
                                    d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Pelamar</span>
                        </div>
                    </a>
                </li>
                <!-- ./ Pelamar -->

                <li class="nav-item">
                    <ul>
                        <!-- Master Data -->
                        <li class="menu nav-item">
                            <button type="button" class="nav-link group"
                                :class="{ 'active': activeDropdown === 'master' }"
                                @click="activeDropdown === 'master' ? activeDropdown = null : activeDropdown = 'master'">
                                <div class="flex items-center">

                                    <svg class="group-hover:!text-primary shrink-0" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.22209 4.60105C6.66665 4.304 7.13344 4.04636 7.6171 3.82976C8.98898 3.21539 9.67491 2.9082 10.5875 3.4994C11.5 4.09061 11.5 5.06041 11.5 7.00001V8.50001C11.5 10.3856 11.5 11.3284 12.0858 11.9142C12.6716 12.5 13.6144 12.5 15.5 12.5H17C18.9396 12.5 19.9094 12.5 20.5006 13.4125C21.0918 14.3251 20.7846 15.011 20.1702 16.3829C19.9536 16.8666 19.696 17.3334 19.399 17.7779C18.3551 19.3402 16.8714 20.5578 15.1355 21.2769C13.3996 21.9959 11.4895 22.184 9.64665 21.8175C7.80383 21.4509 6.11109 20.5461 4.78249 19.2175C3.45389 17.8889 2.5491 16.1962 2.18254 14.3534C1.81598 12.5105 2.00412 10.6004 2.72315 8.86451C3.44218 7.12861 4.65982 5.64492 6.22209 4.60105Z"
                                            fill="currentColor" />
                                        <path
                                            d="M21.446 7.06901C20.6342 5.00831 18.9917 3.36579 16.931 2.55398C15.3895 1.94669 14 3.34316 14 5.00002V9.00002C14 9.5523 14.4477 10 15 10H19C20.6569 10 22.0533 8.61055 21.446 7.06901Z"
                                            fill="currentColor" />
                                    </svg>

                                    <span
                                        class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Master
                                        Data</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{ '!rotate-90': activeDropdown === 'master' }">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'master'" x-collapse
                                class="sub-menu text-gray-500">
                                <li>
                                    <a href="/data/departemen">Data Departemen</a>
                                </li>
                                <li>
                                    <a href="/data/posisi">Data Posisi</a>
                                </li>
                                <li>
                                    <a href="/data/useradm">Data User Admin</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ./ Master Data -->

                    </ul>
                </li>

                <!-- Laporan -->
                <li class="menu nav-item">
                    <a href="/reports" class="nav-link group">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 2C8.67157 2 8 2.67157 8 3.5V4.5C8 5.32843 8.67157 6 9.5 6H14.5C15.3284 6 16 5.32843 16 4.5V3.5C16 2.67157 15.3284 2 14.5 2H9.5Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.5 4.03662C5.24209 4.10719 4.44798 4.30764 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.552 4.30764 18.7579 4.10719 17.5 4.03662V4.5C17.5 6.15685 16.1569 7.5 14.5 7.5H9.5C7.84315 7.5 6.5 6.15685 6.5 4.5V4.03662ZM7 9.75C6.58579 9.75 6.25 10.0858 6.25 10.5C6.25 10.9142 6.58579 11.25 7 11.25H7.5C7.91421 11.25 8.25 10.9142 8.25 10.5C8.25 10.0858 7.91421 9.75 7.5 9.75H7ZM10.5 9.75C10.0858 9.75 9.75 10.0858 9.75 10.5C9.75 10.9142 10.0858 11.25 10.5 11.25H17C17.4142 11.25 17.75 10.9142 17.75 10.5C17.75 10.0858 17.4142 9.75 17 9.75H10.5ZM7 13.25C6.58579 13.25 6.25 13.5858 6.25 14C6.25 14.4142 6.58579 14.75 7 14.75H7.5C7.91421 14.75 8.25 14.4142 8.25 14C8.25 13.5858 7.91421 13.25 7.5 13.25H7ZM10.5 13.25C10.0858 13.25 9.75 13.5858 9.75 14C9.75 14.4142 10.0858 14.75 10.5 14.75H17C17.4142 14.75 17.75 14.4142 17.75 14C17.75 13.5858 17.4142 13.25 17 13.25H10.5ZM7 16.75C6.58579 16.75 6.25 17.0858 6.25 17.5C6.25 17.9142 6.58579 18.25 7 18.25H7.5C7.91421 18.25 8.25 17.9142 8.25 17.5C8.25 17.0858 7.91421 16.75 7.5 16.75H7ZM10.5 16.75C10.0858 16.75 9.75 17.0858 9.75 17.5C9.75 17.9142 10.0858 18.25 10.5 18.25H17C17.4142 18.25 17.75 17.9142 17.75 17.5C17.75 17.0858 17.4142 16.75 17 16.75H10.5Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Laporan</span>
                        </div>
                    </a>
                </li>
                <!-- ./ Laporan -->

            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sidebar", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
