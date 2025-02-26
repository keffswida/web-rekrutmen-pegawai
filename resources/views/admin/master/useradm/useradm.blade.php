<x-layout.admin-default>


    <link rel="stylesheet" href="{{ Vite::asset('resources/css/swiper-bundle.min.css') }}">
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/simple-datatables.js"></script>

    <div x-data="masterUserAdm">
        <div class="panel mt-6">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-semibold text-lg dark:text-white-light">Data User Admin</h5>

                <!-- Add Modal -->
                <div x-data="modal">
                    <button type="button" class="btn btn-warning gap-2" @click="toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" class="w-5 h-5">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Tambah Data
                    </button>
                    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                        <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                            <div
                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8 animate__animated animate__fadeInUp">
                                <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                    <h5 class="font-bold text-lg">Tambah User Admin</h5>
                                    <button type="button" class="text-white-dark hover:text-dark" @click="toggle">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </button>
                                </div>
                                <form action="{{ route('useradm.store') }}" method="post">
                                    @csrf
                                    <div class="p-5">
                                        <div class="mb-4">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                class="form-input" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-input"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-input"
                                                required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="hak_akses" class="form-label">Hak Akses</label>
                                            <select name="hak_akses" id="hak_akses" class="selectize"
                                                placeholder="Pilih salah satu..." required>
                                                <option value="super_admin">Super Admin</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" id="status" class="selectize"
                                                placeholder="Pilih salah satu..." required>
                                                <option value="0">AKTIF</option>
                                                <option value="1">NON AKTIF</option>
                                            </select>
                                        </div>
                                        <div class="flex justify-end items-center mt-8">
                                            <button type="button" class="btn btn-outline-danger"
                                                @click="toggle">Kembali</button>
                                            <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                @click="toggle">Simpan</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Add Modal -->

            </div>
        </div>
        <table id="list_low" class="whitespace-nowrap table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Hak Akses</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($useradms as $useradm)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $useradm->nama_lengkap }}</td>
                        <td>{{ $useradm->email }}</td>
                        <td>
                            @if ($useradm->hak_akses == 'super_admin')
                                <span class="badge bg-warning rounded-full">Super Admin</span>
                            @else
                                <span class="badge bg-info rounded-full">Admin</span>
                            @endif
                        </td>
                        <td>
                            @if ($useradm->status == '0')
                                <span class="badge bg-success rounded-full">AKTIF</span>
                            @else
                                <span class="badge bg-danger rounded-full">NON AKTIF</span>
                            @endif
                        </td>
                        <td>

                            <!-- Detail Modal -->
                            <div x-data="modal" style="display: inline">
                                <button type="button" @click="toggle">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5"
                                            d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                            stroke="#1C274C" stroke-width="1.5" />
                                        <path
                                            d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            stroke="#1C274C" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <div class="fixed items-center justify-center inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                    :class="open && '!block'">
                                    <div class="flex items-start justify-center min-h-screen px-4"
                                        @click.self="open = false">
                                        <div
                                            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8 animate__animated animate__fadeInUp">
                                            <div
                                                class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                <h5 class="font-bold text-lg">Detail User Admin</h5>
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
                                            <form action="{{ route('useradm.update', $useradm) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="p-5">
                                                    <div class="mb-4">
                                                        <label for="nama_lengkap" class="form-label">Nama
                                                            Lengkap</label>
                                                        <input type="text"
                                                            placeholder="{{ $useradm->nama_lengkap }}"
                                                            class="form-input disabled:pointer-events-none" disabled />
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" placeholder="{{ $useradm->email }}"
                                                            class="form-input disabled:pointer-events-none" disabled />
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="text" placeholder="{{ $useradm->password }}"
                                                            class="form-input disabled:pointer-events-none" disabled />
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="hak_akses" class="form-label">Hak Akses</label>
                                                        <select name="hak_akses" id="hak_akses"
                                                            class="form-select disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] text-white-dark"
                                                            disabled>
                                                            <option value="super_admin"
                                                                {{ $useradm->hak_akses == 'super_admin' ? 'selected' : '' }}>
                                                                Super Admin
                                                            </option>
                                                            <option value="admin"
                                                                {{ $useradm->hak_akses == 'admin' ? 'selected' : '' }}>
                                                                Admin
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select name="status" id="status"
                                                            class="form-select disabled:pointer-events-none disabled:bg-[#eee] dark:disabled:bg-[#1b2e4b] text-white-dark"
                                                            disabled>
                                                            <option value="0"
                                                                {{ $useradm->status == '0' ? 'selected' : '' }}>
                                                                AKTIF
                                                            </option>
                                                            <option value="1"
                                                                {{ $useradm->status == '1' ? 'selected' : '' }}>
                                                                NON AKTIF
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="flex justify-end items-center mt-8">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            @click="toggle">Kembali</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./ Detail Modal -->

                            <!-- Edit Modal -->
                            <div x-data="modal" style="display: inline">
                                <button type="button" @click="toggle">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.2869 3.15178L14.3601 4.07866L5.83882 12.5999L5.83881 12.5999C5.26166 13.1771 4.97308 13.4656 4.7249 13.7838C4.43213 14.1592 4.18114 14.5653 3.97634 14.995C3.80273 15.3593 3.67368 15.7465 3.41556 16.5208L2.32181 19.8021L2.05445 20.6042C1.92743 20.9852 2.0266 21.4053 2.31063 21.6894C2.59466 21.9734 3.01478 22.0726 3.39584 21.9456L4.19792 21.6782L7.47918 20.5844L7.47919 20.5844C8.25353 20.3263 8.6407 20.1973 9.00498 20.0237C9.43469 19.8189 9.84082 19.5679 10.2162 19.2751C10.5344 19.0269 10.8229 18.7383 11.4001 18.1612L11.4001 18.1612L19.9213 9.63993L20.8482 8.71306C22.3839 7.17735 22.3839 4.68748 20.8482 3.15178C19.3125 1.61607 16.8226 1.61607 15.2869 3.15178Z"
                                            stroke="#1C274C" stroke-width="1.5" />
                                        <path opacity="0.5"
                                            d="M14.36 4.07812C14.36 4.07812 14.4759 6.04774 16.2138 7.78564C17.9517 9.52354 19.9213 9.6394 19.9213 9.6394M4.19789 21.6777L2.32178 19.8015"
                                            stroke="#1C274C" stroke-width="1.5" />
                                    </svg>
                                </button>
                                <div class="fixed items-center justify-center inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
                                    :class="open && '!block'">
                                    <div class="flex items-start justify-center min-h-screen px-4"
                                        @click.self="open = false">
                                        <div
                                            class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-lg my-8 animate__animated animate__fadeInUp">
                                            <div
                                                class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                <h5 class="font-bold text-lg">Edit User Admin</h5>
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
                                            <form action="{{ route('useradm.update', $useradm->id) }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="p-5">
                                                    <div class="mb-4">
                                                        <label for="nama_lengkap" class="form-label">Nama
                                                            Lengkap</label>
                                                        <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                            class="form-input" value="{{ $useradm->nama_lengkap }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" name="email" id="email"
                                                            class="form-input" value="{{ $useradm->email }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-input" value="{{ $useradm->password }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="hak_akses" class="form-label">Hak Akses</label>
                                                        <select name="hak_akses" id="hak_akses" class="selectize"
                                                            placeholder="Pilih salah satu..." required>
                                                            <option value="super_admin"
                                                                {{ $useradm->hak_akses == 'super_admin' ? 'selected' : '' }}>
                                                                Super Admin
                                                            </option>
                                                            <option value="admin"
                                                                {{ $useradm->hak_akses == 'admin' ? 'selected' : '' }}>
                                                                Admin
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select name="status" id="status" class="selectize"
                                                            placeholder="Pilih salah satu..." required>
                                                            <option value="0"
                                                                {{ $useradm->status == '0' ? 'selected' : '' }}>
                                                                AKTIF
                                                            </option>
                                                            <option value="1"
                                                                {{ $useradm->status == '1' ? 'selected' : '' }}>
                                                                NON AKTIF
                                                            </option>
                                                        </select>
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
                            <!-- ./ Edit Modal -->

                            <!-- Delete -->
                            <form action="{{ route('useradm.destroy', $useradm->id) }}" method="post"
                                style="display: inline">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Apakah anda yakin?')">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5001 6H3.5" stroke="#1C274C" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                        <path opacity="0.5"
                                            d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6"
                                            stroke="#1C274C" stroke-width="1.5" />
                                    </svg>
                                </button>
                            </form>
                            <!-- ./ Delete -->

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>

    <!-- start hightlight js -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/highlight.min.css') }}">
    <script src="/assets/js/highlight.min.js"></script>
    <!-- end hightlight js -->

    <!-- Select2 Script -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/nice-select2.css') }}">
    <script src="/assets/js/nice-select2.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var select = document.querySelectorAll('.selectize');
            select.forEach(function(select) {
                NiceSelect.bind(select);
            });
        });
    </script>
    <!-- Select2 Script -->

    <!-- Datatable Script -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("masterUserAdm", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_low', {
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
    <!-- ./ Datatable Script -->

</x-layout.admin-default>
