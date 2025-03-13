<x-layout.admin-default>

    <script src="/assets/js/simple-datatables.js"></script>

    <div x-data="listDash">
        <div class="panel mt-6">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-semibold text-lg dark:text-white-light">Dashboard</h5>
            </div>
            <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-4">

            <table id="list_dashboard" class="whitespace-nowrap table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelamar</th>
                        <th>Lowongan</th>
                        <th>Tgl. Melamar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataPelamar as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->user->nama_lengkap }}</td>
                            <td>{{ $data->lowongan->posisi->nama_posisi }}</td>
                            {{-- <td>{{ $data->tgl_melamar }}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($data->tgl_melamar)->translatedFormat('d F Y') }}</td>
                            <td>
                                @if ($data->status_pelamaran == '0')
                                    <span class="badge bg-warning rounded-full">Pengajuan</span>
                                @elseif ($data->status_pelamaran == '1')
                                    <span class="badge bg-success rounded-full">Proses Lanjut</span>
                                @elseif ($data->status_pelamaran == '2')
                                    <span class="badge bg-danger rounded-full">Ditolak</span>
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
                                                    <h5 class="font-bold text-lg">Detail Departemen</h5>
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
                                                <form action="{{ route('admin.update', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="p-5">

                                                        <input type="hidden" name="id_pelamar"
                                                            value="{{ $data->id }}">

                                                        <div class="mb-4">
                                                            <label for="nama_lengkap" class="form-label">Nama
                                                                Pelamar</label>
                                                            <input type="text" id="nama_lengkap"
                                                                placeholder="{{ $data->user->nama_lengkap }}"
                                                                class="form-input disabled:pointer-events-none"
                                                                disabled />
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="lowongan" class="form-label">Lowongan
                                                                Dipilih</label>
                                                            <input type="text" id="lowongan"
                                                                placeholder="{{ $data->lowongan->posisi->nama_posisi }}"
                                                                class="form-input disabled:pointer-events-none"
                                                                disabled />
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="tgl_melamar" class="form-label">Tanggal
                                                                Melamar</label>
                                                            <input type="text" id="tgl_melamar"
                                                                placeholder="{{ \Carbon\Carbon::parse($data->tgl_melamar)->translatedFormat('d F Y') }}"
                                                                class="form-input disabled:pointer-events-none"
                                                                disabled />
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="status_pelamaran" class="form-label">Status
                                                                Pelamaran</label>
                                                            <select name="status_pelamaran" id="status_pelamaran"
                                                                class="selectize" placeholder="Pilih salah satu..."
                                                                required>
                                                                <option value="0"
                                                                    {{ $data->status_pelamaran == '0' ? 'selected' : '' }}>
                                                                    Pengajuan
                                                                </option>
                                                                <option value="1"
                                                                    {{ $data->status_pelamaran == '1' ? 'selected' : '' }}>
                                                                    Proses Lanjut
                                                                </option>
                                                                <option value="2"
                                                                    {{ $data->status_pelamaran == '2' ? 'selected' : '' }}>
                                                                    Ditolak
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="catatan" class="form-label">Catatan
                                                                untuk pelamar</label>
                                                            <textarea type="text" name="catatan" id="catatan" placeholder="Beri catatan untuk pelamar..." class="form-input">{{ $data->catatan }}</textarea>
                                                        </div>
                                                        <div
                                                            class="flex flex-col md:flex-row justify-between items-center mt-8 gap-4 w-full">
                                                            <div
                                                                class="flex flex-col md:flex-row justify-start items-center mt-8 gap-4 w-full">
                                                                <a href="{{ route('pelamar.show', $data->id) }}"
                                                                    class="btn btn-warning w-full md:w-auto">
                                                                    Lihat Detail Pelamar
                                                                </a>
                                                                {{-- <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                                @click="toggle">Simpan</button> --}}
                                                            </div>
                                                            <div
                                                                class="flex flex-col md:flex-row justify-end items-center mt-8 gap-4 w-full">
                                                                <button type="button"
                                                                    class="btn btn-outline-danger w-full md:w-auto"
                                                                    @click="toggle">Kembali</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary w-full md:w-auto"
                                                                    @click="toggle">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./ Detail Modal -->

                                <!-- Delete -->
                                <form action="#" method="post" style="display: inline">
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
                Alpine.data("listDash", () => ({
                    datatable: null,
                    init() {
                        this.datatable = new simpleDatatables.DataTable('#list_dashboard', {
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
