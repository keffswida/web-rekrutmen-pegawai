<x-layout.admin-default>

    <script src="/assets/js/simple-datatables.js"></script>

    <div x-data="listDetailPelamar">
        <div class="panel mt-6">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-semibold text-2xl dark:text-white-light font-sans">{{ $pelamar->nama_lengkap }}
                </h5>

                <div class="flex items-center justify-end">
                    <a href="{{ route('pelamar.index') }}" class="btn btn-primary gap-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.4881 4.43057C13.8026 4.70014 13.839 5.17361 13.5694 5.48811L7.98781 12L13.5694 18.5119C13.839 18.8264 13.8026 19.2999 13.4881 19.5695C13.1736 19.839 12.7001 19.8026 12.4306 19.4881L6.43056 12.4881C6.18981 12.2072 6.18981 11.7928 6.43056 11.5119L12.4306 4.51192C12.7001 4.19743 13.1736 4.161 13.4881 4.43057Z"
                                fill="currentColor" />
                            <path
                                d="M17.75 5.00005C17.75 4.68619 17.5546 4.40553 17.2602 4.29664C16.9658 4.18774 16.6348 4.27366 16.4306 4.51196L10.4306 11.512C10.1898 11.7928 10.1898 12.2073 10.4306 12.4881L16.4306 19.4881C16.6348 19.7264 16.9658 19.8124 17.2602 19.7035C17.5546 19.5946 17.75 19.3139 17.75 19L17.75 5.00005Z"
                                fill="currentColor" />
                        </svg>
                        Back
                    </a>
                </div>
            </div>

            <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6">

            <div class="mb-5" x-data="{ tab: 'dataDiri' }">
                <!-- buttons -->
                <div>
                    <ul class="flex flex-wrap mt-3">
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info dark:hover:border-b-black text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'dataDiri' }"
                                @click="tab = 'dataDiri'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" fill="currentColor" />
                                    <ellipse cx="12" cy="17" rx="7" ry="4"
                                        fill="currentColor" />
                                </svg>
                                Data Diri
                            </a>
                        </li>
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info dark:hover:border-b-black text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'pendidikan' }"
                                @click="tab = 'pendidikan'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.217 3.49965C12.796 2.83345 11.2035 2.83345 9.78252 3.49965L5.48919 5.51246C6.27114 5.59683 6.98602 6.0894 7.31789 6.86377C7.80739 8.00594 7.2783 9.32867 6.13613 9.81817L5.06046 10.2792C4.52594 10.5082 4.22261 10.6406 4.01782 10.7456C4.0167 10.7619 4.01564 10.7788 4.01465 10.7962L9.78261 13.5003C11.2036 14.1665 12.7961 14.1665 14.2171 13.5003L20.9082 10.3634C22.3637 9.68105 22.3637 7.31899 20.9082 6.63664L14.217 3.49965Z"
                                        fill="currentColor" />
                                    <path
                                        d="M4.9998 12.9147V16.6254C4.9998 17.6334 5.50331 18.5772 6.38514 19.0656C7.85351 19.8787 10.2038 21 11.9998 21C13.7958 21 16.1461 19.8787 17.6145 19.0656C18.4963 18.5772 18.9998 17.6334 18.9998 16.6254V12.9148L14.8538 14.8585C13.0294 15.7138 10.9703 15.7138 9.14588 14.8585L4.9998 12.9147Z"
                                        fill="currentColor" />
                                    <path
                                        d="M5.54544 8.43955C5.92616 8.27638 6.10253 7.83547 5.93936 7.45475C5.7762 7.07403 5.33529 6.89767 4.95456 7.06083L3.84318 7.53714C3.28571 7.77603 2.81328 7.97849 2.44254 8.18705C2.04805 8.40898 1.70851 8.66944 1.45419 9.05513C1.19986 9.44083 1.09421 9.85551 1.04563 10.3055C0.999964 10.7284 0.999981 11.2424 1 11.8489V14.7502C1 15.1644 1.33579 15.5002 1.75 15.5002C2.16422 15.5002 2.5 15.1644 2.5 14.7502V11.8878C2.5 11.232 2.50101 10.7995 2.53696 10.4665C2.57095 10.1517 2.63046 9.99612 2.70645 9.88087C2.78244 9.76562 2.90202 9.64964 3.178 9.49438C3.46985 9.33019 3.867 9.15889 4.46976 8.90056L5.54544 8.43955Z"
                                        fill="currentColor" />
                                </svg>

                                Pendidikan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info dark:hover:border-b-black text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'pengalamanKerja' }"
                                @click="tab = 'pengalamanKerja'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.16208 8.49969C2 9.60346 2 11.0495 2 13C2 16.7712 2 18.6569 3.17157 19.8284C4.34315 21 6.22876 21 10 21H14C17.7712 21 19.6569 21 20.8284 19.8284C22 18.6569 22 16.7712 22 13C22 11.0497 22 9.60364 21.8379 8.49989C19.5613 9.97971 18.1021 10.9235 16.7501 11.5047V12.0001C16.7501 12.4143 16.4143 12.7501 16.0001 12.7501C15.5914 12.7501 15.259 12.4231 15.2503 12.0165C13.12 12.5781 10.8802 12.5781 8.74991 12.0165C8.74121 12.4231 8.40883 12.7501 8.00009 12.7501C7.58587 12.7501 7.25009 12.4143 7.25009 12.0001V11.5046C5.89804 10.9234 4.43881 9.97957 2.16208 8.49969Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.5814 2.25L10.561 2.25C10.4474 2.24998 10.3591 2.24997 10.2755 2.25503C9.21507 2.31926 8.28647 2.98855 7.89021 3.97426C7.8588 4.05239 7.80711 4.20756 7.77024 4.31825L7.76636 4.32989C7.66326 4.60981 7.47709 4.85224 7.26157 5.02534C7.03409 5.0327 6.81683 5.0422 6.60915 5.05445C4.96519 5.15144 3.92193 5.42122 3.17157 6.17158C2.92691 6.41624 2.73334 6.69204 2.5802 7.00965C2.63777 7.0293 2.69387 7.05632 2.74721 7.09099C4.8475 8.45617 6.16709 9.31008 7.26356 9.85786C7.33001 9.51166 7.6345 9.25009 8.00009 9.25009C8.4143 9.25009 8.75009 9.58588 8.75009 10.0001V10.458C10.8695 11.0976 13.1306 11.0976 15.2501 10.458V10.0001C15.2501 9.58588 15.5859 9.25009 16.0001 9.25009C16.3657 9.25009 16.6702 9.5117 16.7366 9.85794C17.8331 9.31015 19.1527 8.45623 21.2531 7.09099C21.3064 7.05638 21.3624 7.02939 21.4199 7.00975C21.2667 6.6921 21.0731 6.41626 20.8284 6.17158C20.0781 5.42122 19.0348 5.15144 17.3909 5.05445C17.1937 5.04282 16.9879 5.03367 16.773 5.02648C16.7594 5.01545 16.7458 5.00406 16.7322 4.99231C16.4915 4.78435 16.3033 4.51011 16.2084 4.25288L16.2053 4.24344C16.1694 4.13576 16.1415 4.05195 16.1102 3.97426C15.714 2.98855 14.7854 2.31926 13.725 2.25503C13.6414 2.24997 13.553 2.24998 13.4395 2.25L10.5814 2.25ZM14.8176 4.81569L14.8131 4.80495L14.8082 4.79286L14.8037 4.78091L14.8 4.77097L14.7982 4.76596L14.794 4.75373L14.7902 4.74244L14.7881 4.73617L14.7853 4.72783L14.7831 4.72079L14.7813 4.7151C14.742 4.59708 14.7299 4.56204 14.7185 4.53375C14.5384 4.08571 14.1163 3.78148 13.6343 3.75229C13.602 3.75034 13.5625 3.75 13.4191 3.75H10.5814C10.438 3.75 10.3984 3.75034 10.3662 3.75229C9.88424 3.78148 9.46221 4.08561 9.28204 4.53354L9.2794 4.54052L9.27143 4.56245C9.2648 4.58104 9.25672 4.60429 9.2474 4.63156C9.23088 4.67994 9.21232 4.73546 9.19351 4.79186L9.19168 4.79777L9.18945 4.80481L9.18671 4.81314L9.18462 4.81941L9.18079 4.83071L9.17655 4.84295L9.17477 4.84796L9.17113 4.85791L9.16655 4.86987L9.16168 4.88199L9.15751 4.8919L9.15686 4.89336C9.14293 4.92921 9.12818 4.96498 9.11263 5.00064C9.39625 5 9.69183 5 10 5H14C14.3115 5 14.6101 5 14.8965 5.00066C14.868 4.93956 14.8417 4.87784 14.8176 4.81569Z"
                                        fill="currentColor" />
                                </svg>

                                Pengalaman Kerja
                            </a>
                        </li>
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info dark:hover:border-b-black text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'keterampilan' }"
                                @click="tab = 'keterampilan'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.50178 5.38707C8.80966 5.10997 8.83462 4.63576 8.55752 4.32787C8.28043 4.01999 7.80621 3.99503 7.49833 4.27213L5.76084 5.83587C5.0245 6.49853 4.41369 7.04822 3.99428 7.54679C3.55325 8.07104 3.23975 8.6343 3.23975 9.3296C3.23975 10.0249 3.55325 10.5882 3.99428 11.1124C4.41369 11.611 5.02449 12.1607 5.76083 12.8233L7.49833 14.3871C7.80621 14.6642 8.28043 14.6392 8.55752 14.3313C8.83462 14.0234 8.80966 13.5492 8.50178 13.2721L6.80531 11.7453C6.01743 11.0362 5.48623 10.5558 5.14213 10.1468C4.81188 9.7542 4.73975 9.52502 4.73975 9.3296C4.73975 9.13417 4.81188 8.90499 5.14213 8.51241C5.48623 8.10338 6.01743 7.62298 6.80531 6.91389L8.50178 5.38707Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.1795 4.27517C14.5798 4.38157 14.818 4.79234 14.7117 5.19266L10.7248 20.1927C10.6184 20.593 10.2077 20.8312 9.80735 20.7248C9.40703 20.6184 9.16877 20.2077 9.27517 19.8074L13.262 4.80735C13.3684 4.40704 13.7792 4.16877 14.1795 4.27517Z"
                                        fill="currentColor" />
                                    <path
                                        d="M15.4425 10.4983C15.7196 10.1904 16.1938 10.1654 16.5017 10.4425L18.2392 12.0063C18.9756 12.6689 19.5864 13.2186 20.0058 13.7172C20.4468 14.2415 20.7603 14.8047 20.7603 15.5C20.7603 16.1953 20.4468 16.7586 20.0058 17.2828C19.5864 17.7814 18.9756 18.3311 18.2392 18.9937L16.5017 20.5575C16.1938 20.8346 15.7196 20.8096 15.4425 20.5017C15.1654 20.1938 15.1904 19.7196 15.4983 19.4425L17.1947 17.9157C17.9826 17.2066 18.5138 16.7262 18.8579 16.3172C19.1882 15.9246 19.2603 15.6954 19.2603 15.5C19.2603 15.3046 19.1882 15.0754 18.8579 14.6828C18.5138 14.2738 17.9826 13.7934 17.1947 13.0843L15.4983 11.5575C15.1904 11.2804 15.1654 10.8062 15.4425 10.4983Z"
                                        fill="currentColor" />
                                </svg>

                                Keterampilan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'berkas' }"
                                @click="tab = 'berkas'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.8293 10.7154L20.3116 12.6473C19.7074 14.9024 19.4052 16.0299 18.7203 16.7612C18.1795 17.3386 17.4796 17.7427 16.7092 17.9223C16.6129 17.9448 16.5152 17.9621 16.415 17.9744C15.4999 18.0873 14.3834 17.7881 12.3508 17.2435C10.0957 16.6392 8.96815 16.3371 8.23687 15.6522C7.65945 15.1114 7.25537 14.4115 7.07573 13.641C6.84821 12.6652 7.15033 11.5377 7.75458 9.28263L8.27222 7.35077C8.3591 7.02654 8.43979 6.7254 8.51621 6.44561C8.97128 4.77957 9.27709 3.86298 9.86351 3.23687C10.4043 2.65945 11.1042 2.25537 11.8747 2.07573C12.8504 1.84821 13.978 2.15033 16.2331 2.75458C18.4881 3.35883 19.6157 3.66095 20.347 4.34587C20.9244 4.88668 21.3285 5.58657 21.5081 6.35703C21.7356 7.3328 21.4335 8.46034 20.8293 10.7154ZM11.0524 9.80589C11.1596 9.40579 11.5709 9.16835 11.971 9.27556L16.8006 10.5697C17.2007 10.6769 17.4381 11.0881 17.3309 11.4882C17.2237 11.8883 16.8125 12.1257 16.4124 12.0185L11.5827 10.7244C11.1826 10.6172 10.9452 10.206 11.0524 9.80589ZM10.2756 12.7033C10.3828 12.3032 10.794 12.0658 11.1941 12.173L14.0919 12.9495C14.492 13.0567 14.7294 13.4679 14.6222 13.868C14.515 14.2681 14.1038 14.5056 13.7037 14.3984L10.8059 13.6219C10.4058 13.5147 10.1683 13.1034 10.2756 12.7033Z"
                                        fill="currentColor" />
                                    <path opacity="0.5"
                                        d="M16.4149 17.9745C16.2064 18.6128 15.8398 19.1903 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1496 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7152C2.15033 12.4601 1.84821 11.3325 2.07573 10.3568C2.25537 9.5863 2.65945 8.88641 3.23687 8.3456C3.96815 7.66068 5.09569 7.35856 7.35077 6.75431C7.7774 6.64 8.16369 6.53649 8.51621 6.44534C8.51618 6.44545 8.51624 6.44524 8.51621 6.44534C8.43979 6.72513 8.3591 7.02657 8.27222 7.35081L7.75458 9.28266C7.15033 11.5377 6.84821 12.6653 7.07573 13.6411C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6393 12.3508 17.2435C14.3833 17.7881 15.4999 18.0873 16.4149 17.9745Z"
                                        fill="currentColor" />
                                </svg>
                                Berkas Pelamar
                            </a>
                        </li>
                        <li>
                            <a href="javascript:"
                                class="p-3.5 py-2 -mb-[1px] flex items-center border border-transparent hover:text-info text-sm font-semibold gap-2"
                                :class="{ '!border-white-light !border-b-white text-info dark:!border-[#191e3a] dark:!border-b-black': tab === 'files' }"
                                @click="tab = 'files'">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.8293 10.7154L20.3116 12.6473C19.7074 14.9024 19.4052 16.0299 18.7203 16.7612C18.1795 17.3386 17.4796 17.7427 16.7092 17.9223C16.6129 17.9448 16.5152 17.9621 16.415 17.9744C15.4999 18.0873 14.3834 17.7881 12.3508 17.2435C10.0957 16.6392 8.96815 16.3371 8.23687 15.6522C7.65945 15.1114 7.25537 14.4115 7.07573 13.641C6.84821 12.6652 7.15033 11.5377 7.75458 9.28263L8.27222 7.35077C8.3591 7.02654 8.43979 6.7254 8.51621 6.44561C8.97128 4.77957 9.27709 3.86298 9.86351 3.23687C10.4043 2.65945 11.1042 2.25537 11.8747 2.07573C12.8504 1.84821 13.978 2.15033 16.2331 2.75458C18.4881 3.35883 19.6157 3.66095 20.347 4.34587C20.9244 4.88668 21.3285 5.58657 21.5081 6.35703C21.7356 7.3328 21.4335 8.46034 20.8293 10.7154ZM11.0524 9.80589C11.1596 9.40579 11.5709 9.16835 11.971 9.27556L16.8006 10.5697C17.2007 10.6769 17.4381 11.0881 17.3309 11.4882C17.2237 11.8883 16.8125 12.1257 16.4124 12.0185L11.5827 10.7244C11.1826 10.6172 10.9452 10.206 11.0524 9.80589ZM10.2756 12.7033C10.3828 12.3032 10.794 12.0658 11.1941 12.173L14.0919 12.9495C14.492 13.0567 14.7294 13.4679 14.6222 13.868C14.515 14.2681 14.1038 14.5056 13.7037 14.3984L10.8059 13.6219C10.4058 13.5147 10.1683 13.1034 10.2756 12.7033Z"
                                        fill="currentColor" />
                                    <path opacity="0.5"
                                        d="M16.4149 17.9745C16.2064 18.6128 15.8398 19.1903 15.347 19.6519C14.6157 20.3368 13.4881 20.6389 11.2331 21.2432C8.97798 21.8474 7.85044 22.1496 6.87466 21.922C6.10421 21.7424 5.40432 21.3383 4.86351 20.7609C4.17859 20.0296 3.87647 18.9021 3.27222 16.647L2.75458 14.7152C2.15033 12.4601 1.84821 11.3325 2.07573 10.3568C2.25537 9.5863 2.65945 8.88641 3.23687 8.3456C3.96815 7.66068 5.09569 7.35856 7.35077 6.75431C7.7774 6.64 8.16369 6.53649 8.51621 6.44534C8.51618 6.44545 8.51624 6.44524 8.51621 6.44534C8.43979 6.72513 8.3591 7.02657 8.27222 7.35081L7.75458 9.28266C7.15033 11.5377 6.84821 12.6653 7.07573 13.6411C7.25537 14.4115 7.65945 15.1114 8.23687 15.6522C8.96815 16.3371 10.0957 16.6393 12.3508 17.2435C14.3833 17.7881 15.4999 18.0873 16.4149 17.9745Z"
                                        fill="currentColor" />
                                </svg>
                                File Pelamar
                            </a>
                        </li>
                    </ul>
                </div>

                <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] mt-2 mb-2">

                <!-- description -->
                <div class="pt-2 flex-1 text-sm">
                    <div x-show="tab === 'dataDiri'">
                        <div class="p-4">

                            <!-- Main Content Grid -->
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                                <!-- Profile Photo Section -->
                                <div class="lg:col-span-1">
                                    <div class="panel p-4">
                                        <div class="aspect-auto rounded-lg overflow-hidden mb-4">
                                            <img src="{{ asset('storage/' . $pelamar->profile) }}" alt="Profile Photo"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div class="space-y-2">
                                            <h3 class="font-semibold text-lg text-center">
                                                {{ $pelamar->nama_lengkap }}</h3>
                                            <p class="text-gray-500 text-center">
                                                {{ $pelamar->lowongan->posisi->nama_posisi }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Personal Information Section -->
                                <div class="lg:col-span-2">
                                    <div class="panel p-6">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <!-- Left Column -->
                                            <div class="space-y-4">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Nama Lengkap</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->nama_lengkap }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Nama Panggilan</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->nama_panggilan }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Tempat, Tanggal Lahir</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->tempat_lahir }},
                                                        {{ date('d F Y', strtotime($pelamar->tgl_lahir)) }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Jenis Kelamin</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Agama</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        @php
                                                            $agama = [
                                                                'Islam',
                                                                'Kristen',
                                                                'Katolik',
                                                                'Hindu',
                                                                'Buddha',
                                                                'Konghucu',
                                                            ];
                                                        @endphp
                                                        {{ $agama[$pelamar->agama] }}
                                                    </p>
                                                </div>
                                            </div>

                                            <!-- Right Column -->
                                            <div class="space-y-4">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Status Pernikahan</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->status_kawin == 0 ? 'Sudah Menikah' : 'Belum Menikah' }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Email</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->email }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        No.
                                                        Telp</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->no_telp }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">
                                                        Alamat</p>
                                                    <p
                                                        class="mt-1 w-full break-words whitespace-normal overflow-wrap anywhere">
                                                        {{ $pelamar->alamat }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information Grid -->
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                                <!-- Left Column -->
                                <div class="space-y-6">
                                    <!-- Pendidikan -->
                                    <div class="panel p-6">
                                        <h3 class="text-lg font-semibold mb-4">Pendidikan</h3>
                                        <ul
                                            class="list-disc list-inside space-y-2 text-gray-600 w-full break-words whitespace-normal overflow-wrap anywhere">
                                            @foreach ($pendidikans as $pendidikan)
                                                <li>{{ $pendidikan->nama_institusi }}
                                                    {{ $pendidikan->tahun_masuk }} - {{ $pendidikan->tahun_lulus }}
                                                    (@if ($pendidikan->gelar == '0')
                                                        D3
                                                    @elseif ($pendidikan->gelar == '1')
                                                        D4
                                                    @elseif ($pendidikan->gelar == '2')
                                                        S1
                                                    @elseif ($pendidikan->gelar == '3')
                                                        S2
                                                    @elseif ($pendidikan->gelar == '')
                                                        -
                                                    @endif)
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <!-- Pengalaman -->
                                    <div class="panel p-6">
                                        <h3 class="text-lg font-semibold mb-4">Pengalaman</h3>
                                        <ul
                                            class="list-disc list-inside space-y-2 text-gray-600 w-full break-words whitespace-normal overflow-wrap anywhere">
                                            @foreach ($pengalamans as $pengalaman)
                                                <li>{{ $pengalaman->tempat_kerja }} sebagai
                                                    {{ $pengalaman->posisi_kerja }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="space-y-6">
                                    <!-- Keterampilan -->
                                    <div class="panel p-6">
                                        <h3 class="text-lg font-semibold mb-4">Keterampilan
                                        </h3>
                                        <ul class="list-disc list-inside space-y-2 text-gray-600">
                                            @foreach ($keterampilans as $keterampilan)
                                                <li>{{ $keterampilan->bidang_keterampilan }}:
                                                    {{ $keterampilan->keterampilan_terkait }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- CV Section -->
                            <div class="mt-8">
                                <div class="panel p-6">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-semibold">Curriculum Vitae</h3>
                                        <a href="{{ asset('storage/' . $pelamar->cv) }}" target="_blank"
                                            class="text-primary hover:underline flex items-center gap-2">
                                            <span>Lihat CV</span>
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab === 'pendidikan'">
                        <div x-data="pendidikan">
                            <div class="flex items-center justify-end mb-4">
                                <div x-data="pendidikanModal">
                                    <button type="button" class="btn btn-warning gap-2" @click="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-5 h-5">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Tambah
                                    </button>
                                    <!-- Create Modal -->
                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                        :class="open && '!block'">
                                        <div class="flex items-start justify-center min-h-screen px-4"
                                            @click.self="open = false">
                                            <div
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">FORM PENDIDIKAN PELAMAR</h5>
                                                    <button type="button" class="text-white-dark hover:text-dark"
                                                        @click="toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-6 h-6">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="{{ route('pendidikan.store') }}" method="post">
                                                    @csrf
                                                    <div class="p-5">
                                                        <div class="mb-4">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Pelamar</label>
                                                            <input type="text" name="nama_lengkap"
                                                                id="nama_lengkap"
                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                class="form-input" disabled>
                                                        </div>

                                                        <input type="hidden" name="id_pelamar"
                                                            value="{{ $pelamar->id }}">

                                                        <div class="mb-4">
                                                            <label for="nama_institusi" class="form-label">Nama
                                                                Institusi</label>
                                                            <input type="text" name="nama_institusi"
                                                                id="nama_institusi" class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="jurusan" class="form-label">Jurusan</label>
                                                            <input type="text" name="jurusan" id="jurusan"
                                                                class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="tahun_masuk" class="form-label">Tahun
                                                                Masuk</label>
                                                            <input type="text" name="tahun_masuk" id="tahun_masuk"
                                                                class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="tahun_lulus" class="form-label">Tahun
                                                                Lulus</label>
                                                            <input type="text" name="tahun_lulus" id="tahun_lulus"
                                                                class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="gelar" class="form-label">Gelar</label>
                                                            <select name="gelar" id="gelar" class="form-input">
                                                                <option value="">Pilih Gelar Anda</option>
                                                                <option value="0">D3</option>
                                                                <option value="1">D4</option>
                                                                <option value="2">S1</option>
                                                                <option value="3">S2</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="deskripsi_sekolah"
                                                                class="form-label">Deskripsi
                                                                Pendidikan</label>
                                                            <textarea name="deskripsi_sekolah" id="deskripsi_sekolah" class="form-input"></textarea>
                                                        </div>

                                                        <div class="flex justify-end items-center mt-8">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                @click="toggle">Kembali</button>
                                                            <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="list_sekolah" class="whitescape-nowrap table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Institusi</th>
                                    <th>Jurusan</th>
                                    <th>Gelar</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Lulus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendidikans as $pendidikan)
                                    @if ($pendidikan->id_pelamar == $pelamar->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div x-data="pendidikanEditModal" style="display: inline">
                                                    <!-- Edit Button -->
                                                    <button type="button" class="hover:text-info" @click="toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-4.5 h-4.5">
                                                            <path opacity="0.5"
                                                                d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path
                                                                d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                            <path opacity="0.5"
                                                                d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Edit Modal -->
                                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                                        :class="open && '!block'">
                                                        <div class="flex items-start justify-center min-h-screen px-4"
                                                            @click.self="open = false">
                                                            <div
                                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                                <div
                                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                    <h5 class="font-bold text-lg">
                                                                        FORM EDIT PENDIDIKAN PELAMAR</h5>
                                                                    <button type="button"
                                                                        class="text-white-dark hover:text-dark"
                                                                        @click="toggle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" class="w-6 h-6">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18">
                                                                            </line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18">
                                                                            </line>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('pendidikan.update', $pendidikan->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="p-5">
                                                                        <div class="mb-4">
                                                                            <label for="nama_lengkap"
                                                                                class="form-label">Nama
                                                                                Pelamar</label>
                                                                            <input type="text" name="nama_lengkap"
                                                                                id="nama_lengkap"
                                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                                class="form-input" disabled>
                                                                        </div>

                                                                        <input type="hidden" name="id_pelamar"
                                                                            value="{{ $pelamar->id }}">

                                                                        <div class="mb-4">
                                                                            <label for="nama_institusi"
                                                                                class="form-label">Nama
                                                                                Institusi</label>
                                                                            <input type="text"
                                                                                name="nama_institusi"
                                                                                id="nama_institusi" class="form-input"
                                                                                value="{{ $pendidikan->nama_institusi }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="jurusan"
                                                                                class="form-label">Jurusan</label>
                                                                            <input type="text" name="jurusan"
                                                                                id="jurusan" class="form-input"
                                                                                value="{{ $pendidikan->jurusan }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="jurusan"
                                                                                class="form-label">Gelar</label>
                                                                            <select name="gelar" id="gelar"
                                                                                class="form-input">
                                                                                <option value="">
                                                                                    Pilih Gelar Anda</option>
                                                                                <option
                                                                                    value="0"{{ $pendidikan->gelar == '0' ? 'selected' : '' }}>
                                                                                    D3</option>
                                                                                <option
                                                                                    value="1"{{ $pendidikan->gelar == '1' ? 'selected' : '' }}>
                                                                                    D4</option>
                                                                                <option
                                                                                    value="2"{{ $pendidikan->gelar == '2' ? 'selected' : '' }}>
                                                                                    S1</option>
                                                                                <option
                                                                                    value="3"{{ $pendidikan->gelar == '3' ? 'selected' : '' }}>
                                                                                    S2</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="tahun_masuk"
                                                                                class="form-label">Tahun
                                                                                Masuk</label>
                                                                            <input type="text" name="tahun_masuk"
                                                                                id="tahun_masuk" class="form-input"
                                                                                value="{{ $pendidikan->tahun_masuk }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="tahun_lulus"
                                                                                class="form-label">Tahun
                                                                                Lulus</label>
                                                                            <input type="text" name="tahun_lulus"
                                                                                id="tahun_lulus" class="form-input"
                                                                                value="{{ $pendidikan->tahun_lulus }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="deskripsi_sekolah"
                                                                                class="form-label">Deskripsi
                                                                                Sekolah</label>
                                                                            <textarea name="deskripsi_sekolah" id="deskripsi_sekolah" class="form-input">{{ $pendidikan->deskripsi_sekolah }}</textarea>
                                                                        </div>

                                                                        <div
                                                                            class="flex justify-end items-center mt-8">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                @click="toggle">Kembali</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form action="{{ route('pendidikan.destroy', $pendidikan->id) }}"
                                                    method="POST" style="display: inline"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus pendidikan anda?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="hover:text-danger">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path d="M20.5001 6H3.5" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round">
                                                            </path>
                                                            <path
                                                                d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M9.5 11L10 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M14.5 11L14 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $pendidikan->nama_institusi }}</td>
                                            <td>{{ $pendidikan->jurusan }}</td>
                                            <td>
                                                @if ($pendidikan->gelar == '0')
                                                    D3
                                                @elseif ($pendidikan->gelar == '1')
                                                    D4
                                                @elseif ($pendidikan->gelar == '2')
                                                    S1
                                                @elseif ($pendidikan->gelar == '3')
                                                    S2
                                                @elseif ($pendidikan->gelar == '')
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $pendidikan->tahun_masuk }}</td>
                                            <td>{{ $pendidikan->tahun_lulus }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div x-show="tab === 'pengalamanKerja'">
                        <div x-data="work">
                            <div class="flex items-center justify-end mb-4">
                                <div x-data="workModal">
                                    <button type="button" class="btn btn-warning gap-2" @click="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-5 h-5">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Tambah
                                    </button>
                                    <!-- Create Modal -->
                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                        :class="open && '!block'">
                                        <div class="flex items-start justify-center min-h-screen px-4"
                                            @click.self="open = false">
                                            <div
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">FORM PENGALAMAN KERJA PELAMAR</h5>
                                                    <button type="button" class="text-white-dark hover:text-dark"
                                                        @click="toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-6 h-6">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="{{ route('pengalaman.store') }}" method="post">
                                                    @csrf
                                                    <div class="p-5">
                                                        <div class="mb-4">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Pelamar</label>
                                                            <input type="text" name="nama_lengkap"
                                                                id="nama_lengkap"
                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                class="form-input" disabled>
                                                        </div>

                                                        <input type="hidden" name="id_pelamar"
                                                            value="{{ $pelamar->id }}">

                                                        <div class="mb-4">
                                                            <label for="tempat_kerja" class="form-label">Nama
                                                                Tempat Kerja</label>
                                                            <input type="text" name="tempat_kerja"
                                                                id="tempat_kerja" class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="posisi_kerja" class="form-label">Posisi /
                                                                Jabatan</label>
                                                            <input type="text" name="posisi_kerja"
                                                                id="posisi_kerja" class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="periode_kerja" class="form-label">Periode
                                                                Bekerja</label>
                                                            <input type="text" name="periode_kerja"
                                                                id="periode_kerja" class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="deskripsi_kerja" class="form-label">Deskripsi
                                                                Pekerjaan</label>
                                                            <textarea name="deskripsi_kerja" id="deskripsi_kerja" class="form-input" required></textarea>
                                                        </div>

                                                        <div class="flex justify-end items-center mt-8">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                @click="toggle">Kembali</button>
                                                            <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="list_work" class="whitescape-nowrap table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tempat Kerja</th>
                                    <th>Posisi/Jabatan</th>
                                    <th>Periode Kerja</th>
                                    <th>Deskripsi Kerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengalamans as $pengalaman)
                                    @if ($pengalaman->id_pelamar == $pelamar->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengalaman->tempat_kerja }}</td>
                                            <td>{{ $pengalaman->posisi_kerja }}</td>
                                            <td>{{ $pengalaman->periode_kerja }}</td>
                                            <td>
                                                <div x-data="workDetailModal" style="display: inline">
                                                    <!-- Detail Modal -->
                                                    <button type="button" @click="toggle" class="hover:text-info">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path opacity="0.5"
                                                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                            <path
                                                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                                        :class="open && '!block'">
                                                        <div class="flex items-start justify-center min-h-screen px-4"
                                                            @click.self="open = false">
                                                            <div
                                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                                <div
                                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                    <h5 class="font-bold text-lg">DETAIL PENGALAMAN
                                                                        KERJA
                                                                        PELAMAR</h5>
                                                                    <button type="button"
                                                                        class="text-white-dark hover:text-dark"
                                                                        @click="toggle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" class="w-6 h-6">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('pengalaman.update', $pengalaman->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="p-5">
                                                                        <div class="mb-4">
                                                                            <label for="nama_lengkap"
                                                                                class="form-label">Nama
                                                                                Pelamar</label>
                                                                            <input type="text" name="nama_lengkap"
                                                                                id="nama_lengkap"
                                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                                class="form-input" disabled>
                                                                        </div>

                                                                        <input type="hidden" name="id_pelamar"
                                                                            value="{{ $pelamar->id }}">

                                                                        <div class="mb-4">
                                                                            <label for="tempat_kerja"
                                                                                class="form-label">Nama
                                                                                Tempat Kerja</label>
                                                                            <input type="text" name="tempat_kerja"
                                                                                id="tempat_kerja" class="form-input"
                                                                                value="{{ $pengalaman->tempat_kerja }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="posisi_kerja"
                                                                                class="form-label">Posisi /
                                                                                Jabatan</label>
                                                                            <input type="text" name="posisi_kerja"
                                                                                id="posisi_kerja" class="form-input"
                                                                                value="{{ $pengalaman->posisi_kerja }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="periode_kerja"
                                                                                class="form-label">Periode
                                                                                Bekerja</label>
                                                                            <input type="text" name="periode_kerja"
                                                                                id="periode_kerja" class="form-input"
                                                                                value="{{ $pengalaman->periode_kerja }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="deskripsi_kerja"
                                                                                class="form-label">Deskripsi
                                                                                Pekerjaan</label>
                                                                            <textarea name="deskripsi_kerja" id="deskripsi_kerja" class="form-input" required>{{ $pengalaman->deskripsi_kerja }}</textarea>
                                                                        </div>

                                                                        <div
                                                                            class="flex justify-end items-center mt-8">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                @click="toggle">Kembali</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('pengalaman.destroy', $pengalaman->id) }}"
                                                    method="post" class="hover:text-danger" style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah Anda yakin menghapus pengalaman anda ?')">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path d="M20.5001 6H3.5" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path
                                                                d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M9.5 11L10 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round"></path>
                                                            <path opacity="0.5" d="M14.5 11L14 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round"></path>
                                                            <path opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div x-show="tab === 'keterampilan'">
                        <div x-data="skills">
                            <div class="flex items-center justify-end mb-4">
                                <div x-data="skillsModal">
                                    <button type="button" class="btn btn-warning gap-2" @click="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-5 h-5">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Tambah
                                    </button>
                                    <!-- Create Modal -->
                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                        :class="open && '!block'">
                                        <div class="flex items-start justify-center min-h-screen px-4"
                                            @click.self="open = false">
                                            <div
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">FORM KETERAMPILAN PELAMAR</h5>
                                                    <button type="button" class="text-white-dark hover:text-dark"
                                                        @click="toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-6 h-6">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18"></line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="{{ route('keterampilan.store') }}" method="post">
                                                    @csrf
                                                    <div class="p-5">
                                                        <div class="mb-4">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Pelamar</label>
                                                            <input type="text" name="nama_lengkap"
                                                                id="nama_lengkap"
                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                class="form-input" disabled>
                                                        </div>

                                                        <input type="hidden" name="id_pelamar"
                                                            value="{{ $pelamar->id }}">

                                                        <div class="mb-4">
                                                            <label for="bidang_keterampilan" class="form-label">Bidang
                                                                Keterampilan</label>
                                                            <input type="text" name="bidang_keterampilan"
                                                                id="bidang_keterampilan" class="form-input" required>
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="keterampilan_terkait"
                                                                class="form-label">Keterampilan Terkait</label>
                                                            <textarea name="keterampilan_terkait" id="keterampilan_terkait" class="form-input" required></textarea>
                                                        </div>

                                                        <div class="flex justify-end items-center mt-8">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                @click="toggle">Kembali</button>
                                                            <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="list_skills" class="whitescape-nowrap table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bidang Keterampilan</th>
                                    <th>Keterampilan Terkait</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keterampilans as $keterampilan)
                                    @if ($keterampilan->id_pelamar == $pelamar->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $keterampilan->bidang_keterampilan }}</td>
                                            <td>
                                                <div x-data="skillsDetailModal" style="display: inline">
                                                    <!-- Detail Modal -->
                                                    <button type="button" @click="toggle" class="hover:text-info">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path opacity="0.5"
                                                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                            <path
                                                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                                        :class="open && '!block'">
                                                        <div class="flex items-start justify-center min-h-screen px-4"
                                                            @click.self="open = false">
                                                            <div
                                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                                <div
                                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                    <h5 class="font-bold text-lg">DETAIL KETERAMPILAN
                                                                        PELAMAR</h5>
                                                                    <button type="button"
                                                                        class="text-white-dark hover:text-dark"
                                                                        @click="toggle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" class="w-6 h-6">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18"></line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18"></line>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('keterampilan.update', $keterampilan->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="p-5">
                                                                        <div class="mb-4">
                                                                            <label for="nama_lengkap"
                                                                                class="form-label">Nama
                                                                                Pelamar</label>
                                                                            <input type="text" name="nama_lengkap"
                                                                                id="nama_lengkap"
                                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                                class="form-input" disabled>
                                                                        </div>

                                                                        <input type="hidden" name="id_pelamar"
                                                                            value="{{ $pelamar->id }}">

                                                                        <div class="mb-4">
                                                                            <label for="bidang_keterampilan"
                                                                                class="form-label">Bidang
                                                                                Keterampilan</label>
                                                                            <input type="text"
                                                                                name="bidang_keterampilan"
                                                                                id="bidang_keterampilan"
                                                                                class="form-input"
                                                                                value="{{ $keterampilan->bidang_keterampilan }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="mb-4">
                                                                            <label for="keterampilan_terkait"
                                                                                class="form-label">Keterampilan
                                                                                Terkait</label>
                                                                            <textarea name="keterampilan_terkait" id="keterampilan_terkait" class="form-input" required>{{ $keterampilan->keterampilan_terkait }}</textarea>
                                                                        </div>

                                                                        <div
                                                                            class="flex justify-end items-center mt-8">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                @click="toggle">Kembali</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('keterampilan.destroy', $keterampilan->id) }}"
                                                    method="post" class="hover:text-danger" style="display: inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return confirm('Apakah Anda yakin menghapus keterampilan anda ?')">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path d="M20.5001 6H3.5" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"></path>
                                                            <path
                                                                d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M9.5 11L10 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round"></path>
                                                            <path opacity="0.5" d="M14.5 11L14 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round"></path>
                                                            <path opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div x-show="tab === 'berkas'">
                        <div x-data="berkas">
                            <div class="flex items-center justify-end mb-4">
                                <div x-data="modal">
                                    <button type="button" class="btn btn-warning gap-2" @click="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="w-5 h-5">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>
                                        Tambah
                                    </button>
                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                        :class="open && '!block'">
                                        <div class="flex items-start justify-center min-h-screen px-4"
                                            @click.self="open = false">
                                            <div
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">FORM
                                                        SERTIFIKAT PELAMAR</h5>
                                                    <button type="button" class="text-white-dark hover:text-dark"
                                                        @click="toggle">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="w-6 h-6">
                                                            <line x1="18" y1="6" x2="6"
                                                                y2="18">
                                                            </line>
                                                            <line x1="6" y1="6" x2="18"
                                                                y2="18">
                                                            </line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="{{ route('sertifikat.store') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="p-5">
                                                        <div class="mb-4">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Pelamar</label>
                                                            <input type="text" name="nama_lengkap"
                                                                id="nama_lengkap"
                                                                value="{{ $pelamar->nama_lengkap }}"
                                                                class="form-input" disabled>
                                                        </div>

                                                        <input type="hidden" name="id_pelamar"
                                                            value="{{ $pelamar->id }}">

                                                        <!-- Sertifikat -->
                                                        <div class="mt-4">
                                                            <label class="block mb-2">Sertifikat</label>
                                                            <div id="sertifikatRows">
                                                                <div class="flex items-center gap-2 mb-2">
                                                                    <input type="text" name="sertifikat[]"
                                                                        class="form-input flex-1"
                                                                        placeholder="Masukkan Sertifikat" required />
                                                                    <input type="file" name="sertifikat_image[]"
                                                                        class="form-input flex-1"
                                                                        accept="image/*,application/pdf" />
                                                                    <button type="button" class="btn btn-danger"
                                                                        onclick="deleteRow(this)">-</button>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-primary mt-2"
                                                                onclick="addRow('sertifikat')">+
                                                                Tambah Sertifikat</button>
                                                        </div>

                                                        <div class="flex justify-end items-center mt-8">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                @click="toggle">Kembali</button>
                                                            <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                                @click="toggle">Simpan</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="list_sertif" class="whitescape-nowrap table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aksi</th>
                                    <th>Nama Pelamar</th>
                                    <th>Sertifikat</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sertifikats as $sertifikat)
                                    @if ($sertifikat->id_pelamar == $pelamar->id)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div x-data="modal" style="display: inline">
                                                    <!-- Edit Button -->
                                                    <button type="button" class="hover:text-info" @click="toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-4.5 h-4.5">
                                                            <path opacity="0.5"
                                                                d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path
                                                                d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                            <path opacity="0.5"
                                                                d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Edit Modal -->
                                                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                                        :class="open && '!block'">
                                                        <div class="flex items-start justify-center min-h-screen px-4"
                                                            @click.self="open = false">
                                                            <div
                                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                                <div
                                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                    <h5 class="font-bold text-lg">
                                                                        Edit Sertifikat</h5>
                                                                    <button type="button"
                                                                        class="text-white-dark hover:text-dark"
                                                                        @click="toggle">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" class="w-6 h-6">
                                                                            <line x1="18" y1="6"
                                                                                x2="6" y2="18">
                                                                            </line>
                                                                            <line x1="6" y1="6"
                                                                                x2="18" y2="18">
                                                                            </line>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="{{ route('sertifikat.update', $sertifikat->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="p-5">
                                                                        <div class="mb-4">
                                                                            <label class="form-label">Nama
                                                                                Pelamar</label>
                                                                            <input type="text"
                                                                                value="{{ $sertifikat->pelamar->nama_lengkap }}"
                                                                                class="form-input" disabled>
                                                                        </div>
                                                                        <!-- Sertifikat -->
                                                                        <div class="mt-4">
                                                                            <label
                                                                                class="block mb-2">Sertifikat</label>
                                                                            <div id="editSertifikatRows">
                                                                                @foreach (json_decode($sertifikat->sertifikat) as $index => $cert)
                                                                                    <div
                                                                                        class="flex items-center gap-2 mb-2">
                                                                                        <input type="text"
                                                                                            name="sertifikat[]"
                                                                                            class="form-input flex-1"
                                                                                            value="{{ $cert }}"
                                                                                            required />
                                                                                        <input type="file"
                                                                                            name="sertifikat_image[]"
                                                                                            class="form-input flex-1"
                                                                                            accept="image/*,application/pdf" />
                                                                                        <button type="button"
                                                                                            class="btn btn-danger"
                                                                                            onclick="deleteRow(this)">-</button>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                            <button type="button"
                                                                                class="btn btn-primary mt-2"
                                                                                onclick="addRow('editSertifikat')">+
                                                                                Tambah
                                                                                Sertifikat</button>
                                                                        </div>
                                                                        <div
                                                                            class="flex justify-end items-center mt-8">
                                                                            <button type="button"
                                                                                class="btn btn-outline-danger"
                                                                                @click="toggle">Batal</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Button -->
                                                <form action="{{ route('sertifikat.destroy', $sertifikat->id) }}"
                                                    method="POST" style="display: inline"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus sertifikat ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="hover:text-danger">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5">
                                                            <path d="M20.5001 6H3.5" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round">
                                                            </path>
                                                            <path
                                                                d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M9.5 11L10 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5" d="M14.5 11L14 16"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round">
                                                            </path>
                                                            <path opacity="0.5"
                                                                d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                                stroke="currentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $sertifikat->pelamar->nama_lengkap }}
                                            </td>
                                            <td>
                                                @php
                                                    $sertifikatList = json_decode($sertifikat->sertifikat);
                                                    echo implode(', ', $sertifikatList);
                                                @endphp
                                            </td>
                                            <td>
                                                @php
                                                    $sertifikatImages =
                                                        json_decode($sertifikat->sertifikat_image, true) ?? [];
                                                @endphp

                                                @if (!empty($sertifikatImages))
                                                    @foreach ($sertifikatImages as $image)
                                                        <a href="{{ Storage::url($image) }}" target="_blank">
                                                            <img src="{{ Storage::url($image) }}"
                                                                alt="File Sertifikat" width="100">
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <p>Tidak ada sertifikat</p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div x-show="tab === 'files'">
                    <div x-data="file">
                        <div class="flex items-center justify-end mb-4">
                            <div x-data="fileModal">
                                <button type="button" class="btn btn-warning gap-2" @click="toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="w-5 h-5">
                                        <line x1="12" y1="5" x2="12" y2="19">
                                        </line>
                                        <line x1="5" y1="12" x2="19" y2="12">
                                        </line>
                                    </svg>
                                    Tambah
                                </button>
                                <!-- Create Modal -->
                                <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                    :class="open && '!block'">
                                    <div class="flex items-start justify-center min-h-screen px-4"
                                        @click.self="open = false">
                                        <div
                                            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                            <div
                                                class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                <h5 class="font-bold text-lg">FORM KETERAMPILAN PELAMAR</h5>
                                                <button type="button" class="text-white-dark hover:text-dark"
                                                    @click="toggle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                        height="24px" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="w-6 h-6">
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                            <form action="{{ route('files.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="p-5">
                                                    <div class="mb-4">
                                                        <label for="nama_lengkap" class="form-label">Nama
                                                            Pelamar</label>
                                                        <input type="text" name="nama_lengkap"
                                                            id="nama_lengkap" value="{{ $pelamar->nama_lengkap }}"
                                                            class="form-input" disabled>
                                                    </div>

                                                    <input type="hidden" name="id_pelamar"
                                                        value="{{ $pelamar->id }}">

                                                    <div class="mb-4">
                                                        <label for="ijazah_terakhir" class="form-label">Ijazah
                                                            Terakhir</label>
                                                        <input type="file" name="ijazah_terakhir"
                                                            id="ijazah_terakhir" class="form-input" required>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label for="transkrip_nilai" class="form-label">Transkrip
                                                            Nilai</label>
                                                        <input type="file" name="transkrip_nilai"
                                                            id="transkrip_nilai" class="form-input" required>
                                                    </div>

                                                    <div class="flex justify-end items-center mt-8">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            @click="toggle">Kembali</button>
                                                        <button type="submit"
                                                            class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="list_file" class="whitescape-nowrap table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Ijazah Terakhir</th>
                                <th>Transkrip Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                                @if ($file->id_pelamar == $pelamar->id)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div x-data="fileEditModal" style="display: inline">
                                                <!-- Detail Modal -->
                                                <button type="button" @click="toggle" class="hover:text-info">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="w-4.5 h-4.5">
                                                        <path opacity="0.5"
                                                            d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round">
                                                        </path>
                                                        <path
                                                            d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                                            stroke="currentColor" stroke-width="1.5"></path>
                                                        <path opacity="0.5"
                                                            d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                                            stroke="currentColor" stroke-width="1.5"></path>
                                                    </svg>
                                                </button>
                                                <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                                    :class="open && '!block'">
                                                    <div class="flex items-start justify-center min-h-screen px-4"
                                                        @click.self="open = false">
                                                        <div
                                                            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-3xl my-8 animate__animated animate__fadeInUp">
                                                            <div
                                                                class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                <h5 class="font-bold text-lg">DETAIL FILE
                                                                    PELAMAR</h5>
                                                                <button type="button"
                                                                    class="text-white-dark hover:text-dark"
                                                                    @click="toggle">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24px" height="24px"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round" class="w-6 h-6">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18">
                                                                        </line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18">
                                                                        </line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('files.update', $file->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('put')
                                                                <div class="p-5">
                                                                    <div class="mb-4">
                                                                        <label for="nama_lengkap"
                                                                            class="form-label">Nama
                                                                            Pelamar</label>
                                                                        <input type="text" name="nama_lengkap"
                                                                            id="nama_lengkap"
                                                                            value="{{ $pelamar->nama_lengkap }}"
                                                                            class="form-input" disabled>
                                                                    </div>

                                                                    <input type="hidden" name="id_pelamar"
                                                                        value="{{ $pelamar->id }}">

                                                                    <div class="mb-4">
                                                                        <label for="ijazah_terakhir"
                                                                            class="form-label">Ijazah
                                                                            Terakhir</label>
                                                                        <input type="file" name="ijazah_terakhir"
                                                                            id="ijazah_terakhir" class="form-input"
                                                                            required>
                                                                        <a href="{{ asset('storage/' . $file->ijazah_terakhir) }}"
                                                                            target="_blank"
                                                                            class="text-blue-500 underline">Lihat
                                                                            Ijazah</a>
                                                                    </div>

                                                                    <div class="mb-4">
                                                                        <label for="transkrip_nilai"
                                                                            class="form-label">Transkrip
                                                                            Nilai</label>
                                                                        <input type="file" name="transkrip_nilai"
                                                                            id="transkrip_nilai" class="form-input"
                                                                            required>
                                                                        <a href="{{ asset('storage/' . $file->transkrip_nilai) }}"
                                                                            target="_blank"
                                                                            class="text-blue-500 underline">Lihat
                                                                            File</a>
                                                                    </div>

                                                                    <div class="flex justify-end items-center mt-8">
                                                                        <button type="button"
                                                                            class="btn btn-outline-danger"
                                                                            @click="toggle">Kembali</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary ltr:ml-4 rtl:mr-4">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="{{ route('files.destroy', $file->id) }}" method="post"
                                                class="hover:text-danger" style="display: inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Anda yakin menghapus file anda ?')">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="w-5 h-5">
                                                        <path d="M20.5001 6H3.5" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path
                                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round">
                                                        </path>
                                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"></path>
                                                        <path opacity="0.5" d="M14.5 11L14 16"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                        <path opacity="0.5"
                                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                                            stroke="currentColor" stroke-width="1.5"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            @if (!empty($file->ijazah_terakhir))
                                                <a href="{{ asset('storage/' . $file->ijazah_terakhir) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('storage/' . $file->ijazah_terakhir) }}"
                                                        alt="File Ijazah Terakhir" width="100">
                                                </a>
                                            @else
                                                <p>Tidak ada ijazah</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!empty($file->transkrip_nilai))
                                                <a href="{{ Storage::url($file->transkrip_nilai) }}"
                                                    target="_blank">
                                                    <img src="{{ Storage::url($file->transkrip_nilai) }}"
                                                        alt="File Transkrip Nilai" width="100">
                                                </a>
                                            @else
                                                <p>Tidak ada transkrip nilai</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Add Row and Delete Row Script -->
    <script>
        function addRow(type) {
            const container = document.getElementById(`${type}Rows`);
            const row = document.createElement('div');
            row.className = 'flex items-center gap-2 mb-2';

            if (type === 'sertifikat') {
                row.innerHTML = `
                    <input type="text" name="sertifikat[]" class="form-input flex-1" placeholder="Masukkan Sertifikat" required />
                    <input type="file" name="sertifikat_image[]" class="form-input flex-1" accept="image/*" required />
                    <button type="button" class="btn btn-danger" onclick="deleteRow(this)">-</button>
                `;
            } else {
                row.innerHTML = `
                    <input type="text" name="${type}[]" class="form-input flex-1" placeholder="Masukkan ${type.charAt(0).toUpperCase() + type.slice(1)}" required />
                    <button type="button" class="btn btn-danger" onclick="deleteRow(this)">-</button>
                `;
            }

            container.appendChild(row);
        }

        function deleteRow(button) {
            const row = button.closest('div');
            row.remove();
        }
    </script>
    <!-- ./ Add Row and Delete Row Script -->

    <!-- Berkas Script -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("berkas", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_sertif', {
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    });
                }
            }));
        });
    </script>
    <!-- ./ Berkas Script -->

    <!-- Pendidikan Script -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('pendidikanModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));

            Alpine.data('pendidikanEditModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));
        });
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("pendidikan", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_sekolah', {
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    });
                }
            }));
        });
    </script>
    <!-- ./ Pendidikan Script -->

    <!-- Pengalaman Script -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('workModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));

            Alpine.data('workDetailModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));
        });
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("work", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_work', {
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    });
                }
            }));
        });
    </script>
    <!-- ./ Pengalaman Script -->

    <!-- Keterampilan Script -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('skillsModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));

            Alpine.data('skillsDetailModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));
        });
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("skills", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_skills', {
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    });
                }
            }));
        });
    </script>
    <!-- ./ Keterampilan Script -->

    <!-- Files Script -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('fileModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));

            Alpine.data('fileEditModal', () => ({
                open: false,
                toggle() {
                    this.open = !this.open;
                },
            }));
        });
    </script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("file", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_file', {
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 20, 30, 50, 100],
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    });
                }
            }));
        });
    </script>
    <!-- ./ Files Script -->


</x-layout.admin-default>
