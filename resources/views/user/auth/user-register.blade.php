<x-layout.user-default>
    <div class="min-h-screen mt-20 py-10 px-4 sm:px-6 lg:px-14 font-light font-roboto">
        <div class="mb-5" x-data="{ activeTab: 1, totalTabs: 6 }">
            <div class="inline-block w-full">
                <ul class="mb-5 grid grid-cols-6">
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 1 }" @click="activeTab = 1">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 1 }" @click="activeTab = 1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" fill="currentColor" />
                                    <ellipse cx="12" cy="17" rx="7" ry="4"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <span class="text-center hidden md:block mt-2">Data Diri</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 2 }" @click="activeTab = 2">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 2 }" @click="activeTab = 2">
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
                            </div>
                            <span class="text-center hidden md:block mt-2">Pendidikan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 3 }" @click="activeTab = 3">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 3 }" @click="activeTab = 3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM13.75 10C13.75 10.4142 14.0858 10.75 14.5 10.75H15.1893L13.1768 12.7626C13.0791 12.8602 12.9209 12.8602 12.8232 12.7626L11.2374 11.1768C10.554 10.4934 9.44598 10.4934 8.76256 11.1768L6.46967 13.4697C6.17678 13.7626 6.17678 14.2374 6.46967 14.5303C6.76256 14.8232 7.23744 14.8232 7.53033 14.5303L9.82322 12.2374C9.92085 12.1398 10.0791 12.1398 10.1768 12.2374L11.7626 13.8232C12.446 14.5066 13.554 14.5066 14.2374 13.8232L16.25 11.8107V12.5C16.25 12.9142 16.5858 13.25 17 13.25C17.4142 13.25 17.75 12.9142 17.75 12.5V10C17.75 9.58579 17.4142 9.25 17 9.25H14.5C14.0858 9.25 13.75 9.58579 13.75 10Z"
                                        fill="currentColor" />
                                </svg>

                            </div>
                            <span class="text-center hidden md:block mt-2">Pengalaman Kerja</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 4 }" @click="activeTab = 4">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 4 }" @click="activeTab = 4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <span class="text-center hidden md:block mt-2">Keterampilan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 5 }" @click="activeTab = 5">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 5 }" @click="activeTab = 5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.0616 12.6473L20.5793 10.7154C21.1835 8.46034 21.4856 7.3328 21.2581 6.35703C21.0785 5.58657 20.6744 4.88668 20.097 4.34587C19.3657 3.66095 18.2381 3.35883 15.9831 2.75458C13.728 2.15033 12.6004 1.84821 11.6247 2.07573C10.8542 2.25537 10.1543 2.65945 9.61351 3.23687C9.02709 3.86298 8.72128 4.77957 8.26621 6.44561C8.18979 6.7254 8.10915 7.02633 8.02227 7.35057L8.02222 7.35077L7.50458 9.28263C6.90033 11.5377 6.59821 12.6652 6.82573 13.641C7.00537 14.4115 7.40945 15.1114 7.98687 15.6522C8.71815 16.3371 9.84569 16.6392 12.1008 17.2435L12.1008 17.2435C14.1334 17.7881 15.2499 18.0873 16.165 17.9744C16.2652 17.9621 16.3629 17.9448 16.4592 17.9223C17.2296 17.7427 17.9295 17.3386 18.4703 16.7612C19.1552 16.0299 19.4574 14.9024 20.0616 12.6473Z"
                                        fill="currentColor" />
                                    <path
                                        d="M2.50458 14.715L3.02222 16.6469C3.62647 18.902 3.92859 20.0295 4.61351 20.7608C5.15432 21.3382 5.85421 21.7423 6.62466 21.9219C7.60044 22.1494 8.72798 21.8473 10.9831 21.2431C13.2381 20.6388 14.3657 20.3367 15.097 19.6518C15.1577 19.5949 15.2164 19.5363 15.2733 19.4761C14.9391 19.448 14.602 19.3942 14.2594 19.3261C13.5633 19.1877 12.7362 18.9661 11.758 18.704L11.6512 18.6753L11.6264 18.6687C10.5621 18.3835 9.67281 18.1448 8.96277 17.8883C8.21607 17.6185 7.5376 17.286 6.96148 16.7464C6.16753 16.0028 5.61193 15.0404 5.36491 13.9811C5.18567 13.2123 5.23691 12.4585 5.37666 11.6769C5.51058 10.928 5.75109 10.0305 6.03926 8.95515L6.03926 8.95514L6.57365 6.96077L6.59245 6.89062C4.6719 7.40799 3.66101 7.71408 2.98687 8.34548C2.40945 8.88629 2.00537 9.58617 1.82573 10.3566C1.59821 11.3324 1.90033 12.4599 2.50458 14.715Z"
                                        fill="currentColor" />
                                </svg>

                            </div>
                            <span class="text-center hidden md:block mt-2">Upload Dokumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" :class="{ 'text-success': activeTab === 6 }" @click="activeTab = 6">
                            <div class="bg-[#f3f2ee] dark:bg-[#1b2e4b] flex justify-center items-center p-2 rounded-full"
                                :class="{ '!bg-success text-white': activeTab === 6 }" @click="activeTab = 6">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M21.7883 21.7883C22.0706 21.506 22.0706 21.0483 21.7883 20.7659L18.1224 17.1002C19.4884 15.5007 20.3133 13.425 20.3133 11.1566C20.3133 6.09956 16.2137 2 11.1566 2C6.09956 2 2 6.09956 2 11.1566C2 16.2137 6.09956 20.3133 11.1566 20.3133C13.4249 20.3133 15.5006 19.4885 17.1 18.1225L20.7659 21.7883C21.0483 22.0706 21.506 22.0706 21.7883 21.7883Z"
                                        fill="currentColor" />
                                </svg>

                            </div>
                            <span class="text-center hidden md:block mt-2">Konfirmasi & Submit</span>
                        </a>
                    </li>
                </ul>
                <div x-data="{
                    selectedLowonganId: '',
                    selectedLowonganName: '',
                    nama_lengkap: '',
                    nama_panggilan: '',
                    jenis_kelamin: '',
                    agama: '',
                    tempat_lahir: '',
                    tgl_lahir: '',
                    email: '',
                    password: '',
                    no_telp: '',
                    alamat: '',
                    pendidikanRows: [{}],
                    pengalamanKerjaRows: [{}],
                    keterampilanRows: [{}],
                    profile: null,
                    cv: null,
                    ijazah_terakhir: null,
                    transkripNilai: null,
                    certificates: [{}],
                }">
                    <form id="registerForm" enctype="multipart/form-data">
                        <!-- Data Diri -->
                        <div x-show="activeTab === 1">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Data Diri
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>

                                <div class="border rounded-lg p-4 bg-gray-50">
                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                        <div class="sm:col-span-2">
                                            <label for="lowongan_id"
                                                class="text-sm/6 font-semibold text-gray-900">Lowongan Dipilih</label>
                                            <div class="mt-2.5">
                                                <select name="lowongan_id" id="lowongan_id"
                                                    x-model="selectedLowonganId"
                                                    @change="selectedLowonganName = $event.target.options[$event.target.selectedIndex].text"
                                                    class="form-input col-start-1 row-start-1 w-full appearance-none rounded-md sm:text-sm/6">
                                                    <option value="">--Lowongan Dipilih--</option>
                                                    @foreach ($lowongans as $lowongan)
                                                        <option value="{{ $lowongan->id }}">
                                                            {{ $lowongan->posisi->nama_posisi }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="nama_lengkap"
                                                class="text-sm/6 font-semibold text-gray-900">Nama
                                                Lengkap</label>
                                            <div class="mt-2.5">
                                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                    x-model="nama_lengkap" placeholder="Nama Lengkap..."
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="nama_panggilan"
                                                class="text-sm/6 font-semibold text-gray-900">Nama
                                                Panggilan</label>
                                            <div class="mt-2.5">
                                                <input type="text" name="nama_panggilan" id="nama_panggilan"
                                                    x-model="nama_panggilan" placeholder="Nama Panggilan..."
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="jenis_kelamin"
                                                class="text-sm font-semibold text-gray-900">Jenis
                                                Kelamin</label>
                                            <select id="jenis_kelamin" name="jenis_kelamin" x-model="jenis_kelamin"
                                                class="form-input col-start-1 row-start-1 w-full appearance-none rounded-md sm:text-sm/6">
                                                <option value="">Pilih Jenis Kelamin Anda</option>
                                                <option value="0">Laki-laki</option>
                                                <option value="1">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="agama"
                                                class="text-sm font-semibold text-gray-900">Agama</label>
                                            <select id="agama" name="agama" x-model="agama"
                                                class="form-input col-start-1 row-start-1 w-full appearance-none rounded-md sm:text-sm/6">
                                                <option value="">Pilih Agama Anda</option>
                                                <option value="0">Islam</option>
                                                <option value="1">Kristen</option>
                                                <option value="2">Katolik</option>
                                                <option value="3">Hindu</option>
                                                <option value="4">Buddha</option>
                                                <option value="5">Konghucu</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="tempat_lahir"
                                                class="block text-sm/6 font-semibold text-gray-900">Tempat
                                                Lahir</label>
                                            <div class="mt-2.5">
                                                <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                    x-model="tempat_lahir" placeholder="Tempat Lahir..."
                                                    autocomplete="organization"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="tgl_lahir"
                                                class="block text-sm/6 font-semibold text-gray-900">Tanggal
                                                Lahir</label>
                                            <div class="mt-2.5">
                                                <input type="date" name="tgl_lahir" id="tgl_lahir"
                                                    x-model="tgl_lahir" autocomplete="organization"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="status_kawin"
                                                class="text-sm font-semibold text-gray-900">Status
                                                Pernikahan</label>
                                            <select id="status_kawin" name="status_kawin" x-model="status"
                                                autocomplete="status_kawin" aria-label="Status"
                                                class="form-input col-start-1 row-start-1 w-full appearance-none rounded-md sm:text-sm/6">
                                                <option value="">Pilih Status Anda</option>
                                                <option value="0">Sudah Menikah</option>
                                                <option value="1">Belum Menikah</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block text-sm/6 font-semibold text-gray-900">Email</label>
                                            <div class="mt-2.5">
                                                <input type="email" name="email" id="email" x-model="email"
                                                    autocomplete="email" placeholder="example@example.com"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="password"
                                                class="block text-sm/6 font-semibold text-gray-900">Password</label>
                                            <div class="mt-2.5">
                                                <input type="password" name="password" id="password"
                                                    x-model="password" placeholder="**************"
                                                    class="block form-input w-full rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="no_telp"
                                                class="block text-sm/6 font-semibold text-gray-900">No.
                                                Telp</label>
                                            <div class="mt-2.5">
                                                <input type="text" name="no_telp" id="no_telp"
                                                    x-model="no_telp" placeholder="0821-2345-6789"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="alamat"
                                                class="text-sm font-semibold text-gray-900">Alamat</label>
                                            <textarea name="alamat" id="alamat" x-model="alamat" class="w-full form-input rounded-lg"
                                                placeholder="Alamat Anda..." rows="4"></textarea>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="profile" class="text-sm/6 font-semibold text-gray-900">Foto
                                                Profile</label>
                                            <div class="mt-2.5">
                                                <input type="file" name="profile" id="profile"
                                                    @change="profile = $event.target.files[0]"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                <p class="mt-1" x-text="profile ? 'Terupload' : 'Belum Terupload'">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="cv"
                                                class="text-sm/6 font-semibold text-gray-900">Curriculum
                                                Vitae (CV)</label>
                                            <div class="mt-2.5">
                                                <input type="file" name="cv" id="cv"
                                                    @change="cv = $event.target.files[0]"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                <p class="mt-1" x-text="cv ? 'Terupload' : 'Belum Terupload'"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Data Diri -->
                        <!-- Pendidikan -->
                        <div x-show="activeTab === 2">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Pendidikan
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>
                                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                    <div class="sm:col-span-2">

                                        <!-- Education form with dynamic rows -->
                                        {{-- <div x-data="{ pendidikanRows: [{}] }" class="space-y-4"> --}}
                                        <div class="space-y-4">
                                            <template x-for="(row, index) in pendidikanRows" :key="index">
                                                <div class="border rounded-lg p-4 bg-gray-50">
                                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-4">
                                                        <div class="sm:col-span-4">
                                                            <label :for="'nama_institusi_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Nama
                                                                Institusi</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'nama_institusi[' + index + ']'"
                                                                    :id="'nama_institusi_' + index"
                                                                    x-model="pendidikanRows[index].nama_institusi"
                                                                    placeholder="Nama Institusi..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label :for="'jurusan_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Jurusan</label>
                                                            <div class="mt-2.5">
                                                                <input type="text" :name="'jurusan[' + index + ']'"
                                                                    :id="'jurusan_' + index"
                                                                    x-model="pendidikanRows[index].jurusan"
                                                                    placeholder="Jurusan..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label :for="'gelar_' + index"
                                                                class="text-sm font-semibold text-gray-900">Gelar</label>
                                                            <select :id="'gelar_' + index"
                                                                :name="'gelar[' + index + ']'"
                                                                x-model="pendidikanRows[index].gelar"
                                                                class="form-input col-start-1 row-start-1 w-full appearance-none rounded-md sm:text-sm/6">
                                                                <option value="">Pilih Gelar Anda</option>
                                                                <option value="0">SMA</option>
                                                                <option value="1">SMK</option>
                                                                <option value="2">D3</option>
                                                                <option value="3">D4</option>
                                                                <option value="4">S1</option>
                                                                <option value="5">S2</option>
                                                            </select>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label :for="'tahun_masuk_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Tahun
                                                                Masuk</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'tahun_masuk[' + index + ']'"
                                                                    :id="'tahun_masuk_' + index"
                                                                    x-model="pendidikanRows[index].tahun_masuk"
                                                                    placeholder="Tahun Masuk..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label :for="'tahun_lulus_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Tahun
                                                                Lulus</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'tahun_lulus[' + index + ']'"
                                                                    :id="'tahun_lulus_' + index"
                                                                    x-model="pendidikanRows[index].tahun_lulus"
                                                                    placeholder="Tahun Lulus..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-4">
                                                            <label :for="'deskripsi_sekolah_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Deskripsi
                                                                Pendidikan</label>
                                                            <div class="mt-2.5">
                                                                <textarea :name="'deskripsi_sekolah[' + index + ']'" :id="'deskripsi_sekolah_' + index"
                                                                    x-model="pendidikanRows[index].deskripsi_sekolah" class="w-full form-input rounded-lg"
                                                                    placeholder="Deskripsi Pendidikan..." rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <!-- Delete button -->
                                                        <div class="sm:col-span-4 flex justify-end"
                                                            x-show="pendidikanRows.length > 1">
                                                            <button type="button"
                                                                @click="pendidikanRows.splice(index, 1)"
                                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 hover:text-red-700">
                                                                <svg class="w-4 h-4 mr-2" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                                Hapus Pendidikan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <!-- Add button -->
                                            <div class="flex justify-center mt-4">
                                                <button type="button" @click="pendidikanRows.push({})"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Tambah Pendidikan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Pendidikan -->
                        <!-- Pengalaman Kerja -->
                        <div x-show="activeTab === 3">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Pengalaman Kerja
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>
                                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                    <div class="sm:col-span-2">

                                        <!-- Education form with dynamic rows -->
                                        {{-- <div x-data="{ pengalamanKerjaRows: [{}] }" class="space-y-4"> --}}
                                        <div class="space-y-4">
                                            <template x-for="(row, index) in pengalamanKerjaRows"
                                                :key="index">
                                                <div class="border rounded-lg p-4 bg-gray-50">
                                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                                                        <div>
                                                            <label :for="'tempat_kerja_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Nama
                                                                Tempat</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'tempat_kerja[' + index + ']'"
                                                                    :id="'tempat_kerja_' + index"
                                                                    x-model="pengalamanKerjaRows[index].tempat_kerja"
                                                                    placeholder="Nama Tempat Kerja..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label :for="'posisi_kerja_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Posisi /
                                                                Jabatan</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'posisi_kerja[' + index + ']'"
                                                                    :id="'posisi_kerja_' + index"
                                                                    x-model="pengalamanKerjaRows[index].posisi_kerja"
                                                                    placeholder="Posisi / Jabatan..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label :for="'periode_kerja_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Periode
                                                                Bekerja</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'periode_kerja[' + index + ']'"
                                                                    :id="'periode_kerja_' + index"
                                                                    x-model="pengalamanKerjaRows[index].periode_kerja"
                                                                    placeholder="Periode Bekerja..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-4">
                                                            <label :for="'deskripsi_kerja_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Deskripsi
                                                                Pekerjaan</label>
                                                            <div class="mt-2.5">
                                                                <textarea :name="'deskripsi_kerja[' + index + ']'" :id="'deskripsi_kerja_' + index"
                                                                    x-model="pengalamanKerjaRows[index].deskripsi_kerja" class="w-full form-input rounded-lg"
                                                                    placeholder="Deskripsi Pekerjaan..." rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                        <!-- Delete button -->
                                                        <div class="sm:col-span-4 flex justify-end"
                                                            x-show="pengalamanKerjaRows.length > 1">
                                                            <button type="button"
                                                                @click="pengalamanKerjaRows.splice(index, 1)"
                                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 hover:text-red-700">
                                                                <svg class="w-4 h-4 mr-2" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                                Hapus Pengalaman
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <!-- Add button -->
                                            <div class="flex justify-center mt-4">
                                                <button type="button" @click="pengalamanKerjaRows.push({})"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Tambah Pengalaman Kerja
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Pengalaman Kerja -->
                        <!-- Keterampilan -->
                        <div x-show="activeTab === 4">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Keterampilan
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>
                                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                    <div class="sm:col-span-2">

                                        <!-- Education form with dynamic rows -->
                                        {{-- <div x-data="{ keterampilanRows: [{}] }" class="space-y-4"> --}}
                                        <div class="space-y-4">
                                            <template x-for="(row, index) in keterampilanRows" :key="index">
                                                <div class="border rounded-lg p-4 bg-gray-50">
                                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                                        <div class="sm:col-span-2">
                                                            <label :for="'bidang_keterampilan_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Bidang
                                                                Keterampilan</label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'bidang_keterampilan[' + index + ']'"
                                                                    :id="'bidang_keterampilan_' + index"
                                                                    x-model="keterampilanRows[index].bidang_keterampilan"
                                                                    placeholder="Bidang Keterampilan..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div class="sm:col-span-2">
                                                            <label :for="'keterampilan_terkait_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">Keterampilan
                                                                Terkait</label>
                                                            <div class="mt-2.5">
                                                                <textarea :name="'keterampilan_terkait[' + index + ']'" :id="'keterampilan_terkait_' + index"
                                                                    x-model="keterampilanRows[index].keterampilan_terkait" class="w-full form-input rounded-lg"
                                                                    placeholder="Deskripsi Pekerjaan..." rows="4"></textarea>
                                                                <span
                                                                    class="text-white-dark text-[11px] inline-block">Bisa
                                                                    diisi sebanyak-banyaknya, sesuai bidang.</span>
                                                            </div>
                                                        </div>
                                                        <!-- Delete button -->
                                                        <div class="sm:col-span-4 flex justify-end"
                                                            x-show="keterampilanRows.length > 1">
                                                            <button type="button"
                                                                @click="keterampilanRows.splice(index, 1)"
                                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 hover:text-red-700">
                                                                <svg class="w-4 h-4 mr-2" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                                Hapus Keterampilan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <!-- Add button -->
                                            <div class="flex justify-center mt-4">
                                                <button type="button" @click="keterampilanRows.push({})"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Tambah Keterampilan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Keterampilan -->
                        <!-- Upload Dokumen -->
                        <div x-show="activeTab === 5">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Upload Dokumen
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>
                                <div class="border rounded-lg p-4 bg-gray-50 mb-4">
                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                        <!-- Fixed document uploads -->
                                        <div class="sm:col-span-2">
                                            <label for="ijazah_terakhir"
                                                class="text-sm/6 font-semibold text-gray-900">Ijazah
                                                Terakhir</label>
                                            <div class="mt-2.5">
                                                <input type="file" name="ijazah_terakhir" id="ijazah_terakhir"
                                                    @change="ijazah_terakhir = $event.target.files[0]"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                <p class="mt-1"
                                                    x-text="ijazah_terakhir ? 'Terupload' : 'Belum Terupload'">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-2">
                                            <label for="transkrip_nilai"
                                                class="text-sm/6 font-semibold text-gray-900">Transkrip Nilai</label>
                                            <div class="mt-2.5">
                                                <input type="file" name="transkrip_nilai" id="transkrip_nilai"
                                                    @change="transkripNilai = $event.target.files[0]"
                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                <p class="mt-1"
                                                    x-text="transkripNilai ? 'Terupload' : 'Belum Terupload'"></p>
                                            </div>
                                        </div>

                                        <!-- Dynamic certificate rows -->
                                        <div class="sm:col-span-2">
                                            <div class="mb-4">
                                                <h3 class="text-lg font-semibold text-gray-900">Sertifikat</h3>
                                            </div>

                                            <template x-for="(row, index) in certificates" :key="index">
                                                <div class="border rounded-lg p-4 bg-gray-100 mb-4">
                                                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                                        <div>
                                                            <label :for="'sertifikat_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">
                                                                Nama Sertifikat
                                                            </label>
                                                            <div class="mt-2.5">
                                                                <input type="text"
                                                                    :name="'sertifikat[' + index + ']'"
                                                                    :id="'sertifikat_' + index"
                                                                    x-model="certificates[index].sertifikat"
                                                                    placeholder="Nama Sertifikat..."
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label :for="'sertifikat_image_' + index"
                                                                class="text-sm/6 font-semibold text-gray-900">
                                                                File Sertifikat
                                                            </label>
                                                            <div class="mt-2.5">
                                                                <input type="file"
                                                                    :name="'sertifikat_image[' + index + ']'"
                                                                    :id="'sertifikat_image_' + index"
                                                                    @change="certificates[index].sertifikat_image = $event.target.files[0]"
                                                                    class="block w-full form-input rounded-md bg-white px-3.5 py-2">
                                                            </div>
                                                        </div>
                                                        <!-- Delete button -->
                                                        <div class="sm:col-span-2 flex justify-end"
                                                            x-show="certificates.length > 1">
                                                            <button type="button"
                                                                @click="certificates.splice(index, 1)"
                                                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 hover:text-red-700">
                                                                <svg class="w-4 h-4 mr-2" fill="none"
                                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                                Hapus Sertifikat
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>

                                            <!-- Add certificate button -->
                                            <div class="flex justify-center mt-4">
                                                <button type="button" @click="certificates.push({})"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                    </svg>
                                                    Tambah Sertifikat
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Upload Dokumen -->
                        <!-- Konfirmasi & Submiting -->
                        <div x-show="activeTab === 6">
                            <div class="isolate bg-white px-6 py-10 sm:py-8 lg:px-8">
                                <h1 class="text-xl font-semibold text-black my-4 text-center">
                                    Konfirmasi Data
                                    <span class="block mt-2 w-20 h-1 bg-green-400 mx-auto rounded-full"></span>
                                </h1>

                                <!-- Personal Data Summary -->
                                <div class="border rounded-lg p-6 bg-gray-50 mb-6">
                                    <h2 class="text-lg font-semibold mb-4 text-gray-900 border-b pb-2">Data Pribadi
                                    </h2>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="md:col-span-2">
                                            <p class="text-sm font-medium text-gray-500">Lowongan yang Dipilih</p>
                                            <p class="mt-1 font-extrabold" x-text="selectedLowonganName || '-'"></p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Nama Lengkap</p>
                                            <p class="mt-1" x-text="nama_lengkap || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Nama Panggilan</p>
                                            <p class="mt-1" x-text="nama_panggilan || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Jenis Kelamin</p>
                                            <p class="mt-1" x-text="jenis_kelamin || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Agama</p>
                                            <p class="mt-1" x-text="agama || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Tempat Lahir</p>
                                            <p class="mt-1" x-text="tempat_lahir || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Tanggal Lahir</p>
                                            <p class="mt-1" x-text="tgl_lahir || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Email</p>
                                            <p class="mt-1" x-text="email || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Password</p>
                                            <p class="mt-1" x-text="password || '-'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">No. Telp</p>
                                            <p class="mt-1" x-text="no_telp || '-'">
                                            </p>
                                        </div>
                                        <div class="md:col-span-2">
                                            <p class="text-sm font-medium text-gray-500">Alamat</p>
                                            <p class="mt-1" x-text="alamat || '-'">
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Education Summary -->
                                <div class="border rounded-lg p-6 bg-gray-50 mb-6">
                                    <h2 class="text-lg font-semibold mb-4 text-gray-900 border-b pb-2">Riwayat
                                        Pendidikan</h2>
                                    <template x-for="(education, index) in pendidikanRows" :key="index">
                                        <div
                                            class="mb-4
                                        pb-4 border-b last:border-b-0">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Institusi</p>
                                                    <p class="mt-1" x-text="education.nama_institusi || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Jurusan</p>
                                                    <p class="mt-1" x-text="education.jurusan || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Gelar</p>
                                                    <p class="mt-1" x-text="education.gelar || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Tahun Masuk</p>
                                                    <p class="mt-1" x-text="education.tahun_masuk || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Tahun Lulus</p>
                                                    <p class="mt-1" x-text="education.tahun_lulus || '-'">
                                                    </p>
                                                </div>
                                                <div class="md:col-span-2">
                                                    <p class="text-sm font-medium text-gray-500">Deskripsi</p>
                                                    <p class="mt-1" x-text="education.deskripsi_sekolah || '-'">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <!-- Work Experience Summary -->
                                <div class="border rounded-lg p-6 bg-gray-50 mb-6">
                                    <h2 class="text-lg font-semibold mb-4 text-gray-900 border-b pb-2">Pengalaman
                                        Kerja</h2>
                                    <template x-for="(work, index) in pengalamanKerjaRows">
                                        <div class="mb-4 pb-4 border-b last:border-b-0">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Tempat Kerja</p>
                                                    <p class="mt-1" x-text="work.tempat_kerja || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Posisi</p>
                                                    <p class="mt-1" x-text="work.posisi_kerja || '-'">
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm font-medium text-gray-500">Periode</p>
                                                    <p class="mt-1" x-text="work.periode_kerja || '-'">
                                                    </p>
                                                </div>
                                                <div class="md:col-span-2">
                                                    <p class="text-sm font-medium text-gray-500">Deskripsi
                                                        Pekerjaan</p>
                                                    <p class="mt-1" x-text="work.deskripsi_kerja || '-'">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <!-- Document Summary -->
                                <div class="border rounded-lg p-6 bg-gray-50 mb-6">
                                    <h2 class="text-lg font-semibold mb-4 text-gray-900 border-b pb-2">Dokumen yang
                                        Diupload</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">CV</p>
                                            <p class="mt-1" x-text="cv ? cv.name : 'Belum Terupload'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Ijazah</p>
                                            <p class="mt-1"
                                                x-text="ijazah_terakhir ? ijazah_terakhir.name : 'Belum Terupload'">
                                            </p>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Transkrip Nilai</p>
                                            <p class="mt-1"
                                                x-text="transkripNilai ? transkripNilai.name : 'Belum Terupload'">
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Certificates Summary -->
                                    <div class="mt-6">
                                        <h3 class="text-md font-semibold mb-4 text-gray-900">Sertifikat</h3>
                                        <template x-for="(cert, index) in certificates" :key="index">
                                            <div class="mb-4 last:mb-0">
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                    <div>
                                                        <p class="text-sm font-medium text-gray-500">Nama
                                                            Sertifikat</p>
                                                        <p class="mt-1" x-text="cert.sertifikat || '-'">
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm font-medium text-gray-500">File Sertifikat
                                                        </p>
                                                        <p class="mt-1"
                                                            x-text="cert.sertifikat_image ? cert.sertifikat_image.name : 'Belum Terupload'">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                                <!-- Terms and Submit -->
                                <div class="mt-6 space-y-4">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" id="terms" name="terms"
                                            class="form-checkbox h-4 w-4 text-green-600">
                                        <label for="terms" class="text-sm text-gray-700 mb-0">
                                            Saya menyatakan bahwa data yang saya masukkan adalah benar dan dapat
                                            dipertanggungjawabkan
                                        </label>
                                    </div>
                                    <div class="flex justify-center">
                                        <button type="button" id="submitRegistration"
                                            class="btn bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-md">
                                            Submit Lamaran
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./ Konfirmasi & Submiting -->
                    </form>
                </div>
                <div class="flex justify-between items-center">
                    <button type="button" class="btn btn-success" :disabled="activeTab === 1" @click="activeTab--">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.5303 5.46967C10.8232 5.76256 10.8232 6.23744 10.5303 6.53033L5.81066 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H5.81066L10.5303 17.4697C10.8232 17.7626 10.8232 18.2374 10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303L3.46967 12.5303C3.17678 12.2374 3.17678 11.7626 3.46967 11.4697L9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967Z"
                                fill="currentColor" />
                        </svg>
                        Back
                    </button>

                    <button type="button" class="btn btn-success" :disabled="activeTab === 6" @click="activeTab++">
                        Next
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("submitRegistration").addEventListener("click", function() {
            let form = document.getElementById("registerForm");
            let formData = new FormData(form);

            document.querySelectorAll('input[type="file"]').forEach(input => {
                if (input.files.length > 0) {
                    formData.append(input.name, input.files[0]);
                }
            });

            fetch("{{ route('register.process') }}", {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute(
                            "content"),
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Pendaftaran Berhasil!");
                        window.location.href = 'login';
                    } else {
                        alert("Gagal menyimpan data!");
                    }
                })
                .catch(error => console.error("Error:", error));
        });
    </script>

</x-layout.user-default>
