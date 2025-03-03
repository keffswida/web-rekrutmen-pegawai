<header class="z-40" :class="{ 'dark': $store.app.semidark && $store.app.menu === 'horizontal' }">
    <div class="shadow-sm">
        <div class="relative bg-white flex w-full items-center px-5 py-2.5 dark:bg-[#0e1726]">
            <div class="horizontal-logo flex lg:hidden justify-between items-center ltr:mr-2 rtl:ml-2">
                <a href="/admin" class="main-logo flex items-center shrink-0">
                    <img class="w-8 ltr:-ml-1 rtl:-mr-1 inline" src="{{ asset('assets/images/logo_rsi.png') }}"
                        alt="image" />
                    {{-- <span
                        class="text-xl ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle hidden md:inline dark:text-white-light transition-all duration-300">E-Recruitment</span> --}}
                    <div class="flex flex-col justify-center items-center mx-4">
                        <span
                            class="text-lg ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle hidden lg:inline dark:text-white-light">E-Recruitment
                        </span>
                        <span
                            class="text-base ltr:ml-1.5 rtl:mr-1.5 font-semibold align-middle hidden lg:inline dark:text-white-light">RSI
                            Jemursari
                        </span>
                    </div>
                </a>

                <a href="javascript:;"
                    class="collapse-icon flex-none dark:text-[#d0d2d6] hover:text-primary dark:hover:text-primary flex lg:hidden ltr:ml-2 rtl:mr-2 p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:bg-white-light/90 dark:hover:bg-dark/60"
                    @click="$store.app.toggleSidebar()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" />
                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            <div x-data="header"
                class="sm:flex-1 ltr:sm:ml-0 ltr:ml-auto sm:rtl:mr-0 rtl:mr-auto flex items-center space-x-1.5 lg:space-x-2 rtl:space-x-reverse dark:text-[#d0d2d6]">
                <div class="sm:ltr:mr-auto sm:rtl:ml-auto" x-data="{ search: false }" @click.outside="search = false">
                    <form
                        class="sm:relative absolute inset-x-0 sm:top-0 top-1/2 sm:translate-y-0 -translate-y-1/2 sm:mx-0 mx-4 z-10 sm:block hidden"
                        :class="{ '!block': search }" @submit.prevent="search = false">
                        <div class="relative">
                            <input type="text"
                                class="form-input ltr:pl-9 rtl:pr-9 ltr:sm:pr-4 rtl:sm:pl-4 ltr:pr-9 rtl:pl-9 peer sm:bg-transparent bg-gray-100 placeholder:tracking-widest"
                                placeholder="Search..." />
                            <button type="button"
                                class="absolute w-9 h-9 inset-0 ltr:right-auto rtl:left-auto appearance-none peer-focus:text-primary">
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor"
                                        stroke-width="1.5" opacity="0.5" />
                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </button>
                            <button type="button"
                                class="hover:opacity-80 sm:hidden block absolute top-1/2 -translate-y-1/2 ltr:right-2 rtl:left-2"
                                @click="search = false">
                                </svg>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="1.5" />
                                    <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <button type="button"
                        class="search_btn sm:hidden p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:bg-white-light/90 dark:hover:bg-dark/60"
                        @click="search = ! search">
                        <svg class="w-4.5 h-4.5 mx-auto dark:text-[#d0d2d6]" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5"
                                opacity="0.5" />
                            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div>
                    <a href="javascript:;" x-cloak x-show="$store.app.theme === 'light'" href="javascript:;"
                        class="flex items-center p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('dark')">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5" />
                            <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5" d="M19.7778 4.22266L17.5558 6.25424" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5" d="M4.22217 4.22266L6.44418 6.25424" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5" d="M6.44434 17.5557L4.22211 19.7779" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5" d="M19.7778 19.7773L17.5558 17.5551" stroke="currentColor"
                                stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                    <a href="javascript:;" x-cloak x-show="$store.app.theme === 'dark'" href="javascript:;"
                        class="flex items-center p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('system')">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    <a href="javascript:;" x-cloak x-show="$store.app.theme === 'system'" href="javascript:;"
                        class="flex items-center p-2 rounded-full bg-white-light/40 dark:bg-dark/40 hover:text-primary hover:bg-white-light/90 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('light')">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                            <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </a>
                </div>
                <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
                    <a href="javascript:;" class="relative group" @click="toggle()">
                        <span><img class="w-10 h-10 rounded-full object-cover saturate-50 group-hover:saturate-100"
                                src="/assets/images/user-profile.png" alt="image" /></span>
                    </a>
                    <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                        class="ltr:right-0 rtl:left-0 text-dark dark:text-white-dark top-11 !py-0 w-[230px] font-semibold dark:text-white-light/90">
                        <li class="border-t border-white-light dark:border-white-light/10">
                            <a href="/auth/boxed-signin" class=" text-danger !py-3" @click="toggle">
                                <svg class="w-4.5 h-4.5 ltr:mr-2 rtl:ml-2 shrink-0 rotate-90" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- horizontal menu -->
        <ul
            class="horizontal-menu hidden justify-center py-1.5 font-semibold px-6 lg:space-x-1.5 xl:space-x-6 rtl:space-x-reverse bg-white border-t border-[#ebedf2] dark:border-[#191e3a] dark:bg-[#0e1726] text-black dark:text-white-dark">

            <!-- Dashboard -->
            <li class="menu nav-item relative">
                <a href="/admin" class="nav-link group">
                    <div class="flex items-center">

                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
            <li class="menu nav-item relative">
                <a href="/lowongan" class="nav-link group">
                    <div class="flex items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
            <li class="menu nav-item relative">
                <a href="/pelamar" class="nav-link group">
                    <div class="flex items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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

            <!-- Master Data -->
            <li class="menu nav-item relative" x-data="{ isOpen: false }">
                <a href="javascript:;" class="nav-link" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                    <div class="flex items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.16208 8.49969C2 9.60346 2 11.0495 2 13C2 16.7712 2 18.6569 3.17157 19.8284C4.34315 21 6.22876 21 10 21H14C17.7712 21 19.6569 21 20.8284 19.8284C22 18.6569 22 16.7712 22 13C22 11.0497 22 9.60364 21.8379 8.49989C19.5613 9.97971 18.1021 10.9235 16.7501 11.5047V12.0001C16.7501 12.4143 16.4143 12.7501 16.0001 12.7501C15.5914 12.7501 15.259 12.4231 15.2503 12.0165C13.12 12.5781 10.8802 12.5781 8.74991 12.0165C8.74121 12.4231 8.40883 12.7501 8.00009 12.7501C7.58587 12.7501 7.25009 12.4143 7.25009 12.0001V11.5046C5.89804 10.9234 4.43881 9.97957 2.16208 8.49969Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.5814 2.25L10.561 2.25C10.4474 2.24998 10.3591 2.24997 10.2755 2.25503C9.21507 2.31926 8.28647 2.98855 7.89021 3.97426C7.8588 4.05239 7.80711 4.20756 7.77024 4.31825L7.76636 4.32989C7.66326 4.60981 7.47709 4.85224 7.26157 5.02534C7.03409 5.0327 6.81683 5.0422 6.60915 5.05445C4.96519 5.15144 3.92193 5.42122 3.17157 6.17158C2.92691 6.41624 2.73334 6.69204 2.5802 7.00965C2.63777 7.0293 2.69387 7.05632 2.74721 7.09099C4.8475 8.45617 6.16709 9.31008 7.26356 9.85786C7.33001 9.51166 7.6345 9.25009 8.00009 9.25009C8.4143 9.25009 8.75009 9.58588 8.75009 10.0001V10.458C10.8695 11.0976 13.1306 11.0976 15.2501 10.458V10.0001C15.2501 9.58588 15.5859 9.25009 16.0001 9.25009C16.3657 9.25009 16.6702 9.5117 16.7366 9.85794C17.8331 9.31015 19.1527 8.45623 21.2531 7.09099C21.3064 7.05638 21.3624 7.02939 21.4199 7.00975C21.2667 6.6921 21.0731 6.41626 20.8284 6.17158C20.0781 5.42122 19.0348 5.15144 17.3909 5.05445C17.1937 5.04282 16.9879 5.03367 16.773 5.02648C16.7594 5.01545 16.7458 5.00406 16.7322 4.99231C16.4915 4.78435 16.3033 4.51011 16.2084 4.25288L16.2053 4.24344C16.1694 4.13576 16.1415 4.05195 16.1102 3.97426C15.714 2.98855 14.7854 2.31926 13.725 2.25503C13.6414 2.24997 13.553 2.24998 13.4395 2.25L10.5814 2.25ZM14.8176 4.81569L14.8131 4.80495L14.8082 4.79286L14.8037 4.78091L14.8 4.77097L14.7982 4.76596L14.794 4.75373L14.7902 4.74244L14.7881 4.73617L14.7853 4.72783L14.7831 4.72079L14.7813 4.7151C14.742 4.59708 14.7299 4.56204 14.7185 4.53375C14.5384 4.08571 14.1163 3.78148 13.6343 3.75229C13.602 3.75034 13.5625 3.75 13.4191 3.75H10.5814C10.438 3.75 10.3984 3.75034 10.3662 3.75229C9.88424 3.78148 9.46221 4.08561 9.28204 4.53354L9.2794 4.54052L9.27143 4.56245C9.2648 4.58104 9.25672 4.60429 9.2474 4.63156C9.23088 4.67994 9.21232 4.73546 9.19351 4.79186L9.19168 4.79777L9.18945 4.80481L9.18671 4.81314L9.18462 4.81941L9.18079 4.83071L9.17655 4.84295L9.17477 4.84796L9.17113 4.85791L9.16655 4.86987L9.16168 4.88199L9.15751 4.8919L9.15686 4.89336C9.14293 4.92921 9.12818 4.96498 9.11263 5.00064C9.39625 5 9.69183 5 10 5H14C14.3115 5 14.6101 5 14.8965 5.00066C14.868 4.93956 14.8417 4.87784 14.8176 4.81569Z"
                                fill="currentColor" />
                        </svg>
                        <span class="px-1">Master Data</span>
                    </div>
                    <div class="right_arrow" :class="{ 'rotate-90': isOpen }">
                        <svg class="w-4 h-4 transition-transform duration-300" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </a>
                <ul class="sub-menu" x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" @mouseenter="isOpen = true"
                    @mouseleave="isOpen = false">
                    <li>
                        <a href="/data/departemen">Data Departemen</a>
                    </li>
                    <li>
                        <a href="/data/posisi">Data Posisi</a>
                    </li>
                    {{-- <li>
                        <a href="/data/kualifikasi">Data Kualifikasi</a>
                    </li> --}}
                    <li>
                        <a href="/data/useradm">Data User Admin</a>
                    </li>
                </ul>
            </li>
            <!-- ./ Master Data -->

            <!-- Laporan -->
            <li class="menu nav-item relative">
                <a href="/reports" class="nav-link group">
                    <div class="flex items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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

            <!-- Pengaturan -->
            <li class="menu nav-item relative">
                <a href="#" class="nav-link group">
                    <div class="flex items-center">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z"
                                fill="currentColor" />
                        </svg>

                        <span
                            class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Pengaturan</span>
                    </div>
                </a>
            </li>
            <!-- ./ Pengaturan -->

        </ul>
        <!-- horizontal menu -->

    </div>
</header>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("header", () => ({
            init() {
                const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                    .location.pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.classList.add('active');
                            });
                        }
                    }
                }
            },

            removeNotification(value) {
                this.notifications = this.notifications.filter((d) => d.id !== value);
            },

            removeMessage(value) {
                this.messages = this.messages.filter((d) => d.id !== value);
            },
        }));
    });
</script>
