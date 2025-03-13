<x-layout.admin-default>


    <script src="/assets/js/simple-datatables.js"></script>

    <div x-data="listlow">
        <div class="panel mt-6">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-semibold text-lg dark:text-white-light">List Lowongan</h5>

                <a href="{{ route('lowongan.create') }}" class="btn btn-warning gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="w-5 h-5">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Tambah Data
                </a>
            </div>

            <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-4">

            <table id="list_low" class="whitespace-nowrap table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Brosur</th>
                        <th>Posisi</th>
                        <th>Departemen</th>
                        <th>Status</th>
                        <th>Kebutuhan Pelamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongans as $lowongan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if (!empty($lowongan->brosur))
                                    <a href="{{ Storage::url($lowongan->brosur) }}" target="_blank">
                                        <img src="{{ Storage::url($lowongan->brosur) }}" alt="Brosur Lowongan"
                                            width="100">
                                    </a>
                                @else
                                    <p>Tidak ada brosur</p>
                                @endif
                            </td>
                            <td>{{ $lowongan->posisi->nama_posisi }}</td>
                            <td>{{ $lowongan->departemen->nama_departemen }}</td>
                            <td>
                                @if ($lowongan->status_low == '0')
                                    <span class="badge bg-success rounded-full">AKTIF</span>
                                @else
                                    <span class="badge bg-danger rounded-full">NON AKTIF</span>
                                @endif
                            </td>
                            <td>{{ $lowongan->kebutuhan_pelamar }}</td>
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
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">Detail Lowongan</h5>
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
                                                <div class="p-5">
                                                    <div class="flex justify-between lg:flex-row flex-col">
                                                        <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
                                                            <div class="mt-4 flex items-center">
                                                                <label for="detail_departemen_id"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Departemen</label>
                                                                <select id="detail_departemen_id" name="departemen_id"
                                                                    class="form-select flex-1" disabled>
                                                                    <option value="">Pilih Departemen
                                                                    </option>
                                                                    @foreach ($departemen as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $lowongan->departemen_id == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->nama_departemen }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mt-4 flex items-center">
                                                                <label for="detail_posisi_id"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nama
                                                                    Posisi</label>
                                                                <select id="detail_posisi_id" name="posisi_id"
                                                                    class="form-select flex-1" disabled>
                                                                    <option value="">Pilih Posisi</option>
                                                                    @foreach ($posisi->where('status', '0') as $item)
                                                                        <option value="{{ $item->id }}"
                                                                            {{ $lowongan->posisi_id == $item->id ? 'selected' : '' }}>
                                                                            {{ $item->nama_posisi }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="mt-4 flex items-center">
                                                                <label for="tgl_buka"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal
                                                                    Buka</label>
                                                                <input id="tgl_buka" type="date" name="tgl_buka"
                                                                    class="form-input flex-1"
                                                                    value="{{ $lowongan->tgl_buka }}" disabled />
                                                            </div>
                                                            <div class="mt-4 flex items-center">
                                                                <label for="tgl_tutup"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal
                                                                    Tutup</label>
                                                                <input id="tgl_tutup" type="date" name="tgl_tutup"
                                                                    class="form-input flex-1"
                                                                    value="{{ $lowongan->tgl_tutup }}" disabled />
                                                            </div>
                                                        </div>
                                                        <div class="lg:w-1/2 w-full">
                                                            <div class="flex items-center mt-4">
                                                                <label for="lokasi"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Lokasi
                                                                    Penempatan</label>
                                                                <input id="lokasi" type="text" name="lokasi"
                                                                    class="form-input flex-1"
                                                                    value="{{ $lowongan->lokasi }}" disabled />
                                                            </div>
                                                            <div class="flex items-center mt-4">
                                                                <label for="status_low"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Status
                                                                    Lowongan</label>
                                                                <select id="status_low" name="status_low"
                                                                    class="form-select flex-1" disabled>
                                                                    <option value="">Status</option>
                                                                    <option value="aktif"
                                                                        {{ $lowongan->status_low == '0' ? 'selected' : '' }}>
                                                                        Aktif</option>
                                                                    <option value="non_aktif"
                                                                        {{ $lowongan->status_low == '1' ? 'selected' : '' }}>
                                                                        Non-Aktif</option>
                                                                </select>
                                                            </div>
                                                            <div class="flex items-center mt-4">
                                                                <label for="kebutuhan_pelamar"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Kebutuhan
                                                                    Pelamar</label>
                                                                <input id="kebutuhan_pelamar" type="number"
                                                                    name="kebutuhan_pelamar" class="form-input flex-1"
                                                                    value="{{ $lowongan->kebutuhan_pelamar }}"
                                                                    disabled />
                                                            </div>
                                                            <div class="flex items-center mt-4">
                                                                <label for="brosur"
                                                                    class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Brosur
                                                                    Lowongan</label>
                                                                <a href="{{ Storage::url($lowongan->brosur) }}"
                                                                    target="_blank">
                                                                    <img src="{{ Storage::url($lowongan->brosur) }}"
                                                                        alt="Brosur Lowongan" width="100">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-5">
                                                        <div>
                                                            <label for="kualifikasi">Kualifikasi</label>
                                                            <textarea id="kualifikasi" name="kualifikasi" class="form-textarea min-h-[130px]" disabled>{{ $lowongan->kualifikasi }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mt-5">
                                                        <div>
                                                            <label for="deskripsi">Deskripsi Pekerjaan</label>
                                                            <textarea id="deskripsi" name="deskripsi" class="form-textarea min-h-[130px]" disabled>{{ $lowongan->deskripsi }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-end items-center mt-8">
                                                        <button type="button" class="btn btn-outline-danger"
                                                            @click="toggle">Kembali</button>
                                                    </div>
                                                </div>
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
                                                class="panel border-0 p-0 rounded-lg overflow-hidden w-full max-w-5xl my-8 animate__animated animate__fadeInUp">
                                                <div
                                                    class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                    <h5 class="font-bold text-lg">Edit Lowongan</h5>
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
                                                <form action="{{ route('lowongan.update', $lowongan->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="p-5">
                                                        <div class="flex justify-between lg:flex-row flex-col">
                                                            <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
                                                                <div class="mt-4 items-center flex">
                                                                    <label for="departemen_id"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Departemen</label>
                                                                    <select id="departemen_id" name="departemen_id"
                                                                        class="form-select flex-1">
                                                                        <option value="">Pilih Departemen
                                                                        </option>
                                                                        @foreach ($departemen as $item)
                                                                            <option value="{{ $item->id }}"
                                                                                {{ $lowongan->departemen_id == $item->id ? 'selected' : '' }}>
                                                                                {{ $item->nama_departemen }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mt-4 flex items-center">
                                                                    <label for="posisi_id"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nama
                                                                        Posisi</label>
                                                                    <select id="posisi_id" name="posisi_id"
                                                                        class="form-select flex-1">
                                                                        <option value="">Pilih Posisi</option>
                                                                        @foreach ($posisi->where('status', '0')->where('departemen_id', $lowongan->departemen_id) as $item)
                                                                            <option value="{{ $item->id }}"
                                                                                {{ $lowongan->posisi_id == $item->id ? 'selected' : '' }}>
                                                                                {{ $item->nama_posisi }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mt-4 flex items-center">
                                                                    <label for="tgl_buka"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal
                                                                        Buka</label>
                                                                    <input id="tgl_buka" type="date"
                                                                        name="tgl_buka" class="form-input flex-1"
                                                                        value="{{ $lowongan->tgl_buka }}" />
                                                                </div>
                                                                <div class="mt-4 flex items-center">
                                                                    <label for="tgl_tutup"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal
                                                                        Tutup</label>
                                                                    <input id="tgl_tutup" type="date"
                                                                        name="tgl_tutup" class="form-input flex-1"
                                                                        value="{{ $lowongan->tgl_tutup }}" />
                                                                </div>
                                                            </div>
                                                            <div class="lg:w-1/2 w-full">
                                                                <div class="flex items-center mt-4">
                                                                    <label for="lokasi"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Lokasi
                                                                        Penempatan</label>
                                                                    <input id="lokasi" type="text"
                                                                        name="lokasi" class="form-input flex-1"
                                                                        value="{{ $lowongan->lokasi }}" />
                                                                </div>
                                                                <div class="flex items-center mt-4">
                                                                    <label for="status_low"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Status
                                                                        Lowongan</label>
                                                                    <select id="status_low" name="status_low"
                                                                        class="form-select flex-1">
                                                                        <option value="">Status</option>
                                                                        <option value="0"
                                                                            {{ $lowongan->status_low == '0' ? 'selected' : '' }}>
                                                                            Aktif</option>
                                                                        <option value="1"
                                                                            {{ $lowongan->status_low == '1' ? 'selected' : '' }}>
                                                                            Non-Aktif</option>
                                                                    </select>
                                                                </div>
                                                                <div class="flex items-center mt-4">
                                                                    <label for="kebutuhan_pelamar"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Kebutuhan
                                                                        Pelamar</label>
                                                                    <input id="kebutuhan_pelamar" type="text"
                                                                        name="kebutuhan_pelamar"
                                                                        class="form-input flex-1"
                                                                        value="{{ $lowongan->kebutuhan_pelamar }}" />
                                                                </div>
                                                                <div class="flex items-center mt-4">
                                                                    <label for="brosur"
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Brosur
                                                                        Lowongan</label>
                                                                    <input id="brosur" name="brosur"
                                                                        type="file" class="form-input flex-1" />
                                                                </div>
                                                                <div class="flex items-center mt-4">
                                                                    <label for=""
                                                                        class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0"></label>
                                                                    <a href="{{ Storage::url($lowongan->brosur) }}"
                                                                        target="_blank"
                                                                        class="text-blue-500 underline">Lihat Brosur
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <div>
                                                                <label for="kualifikasi">Kualifikasi</label>
                                                                <textarea id="kualifikasi" name="kualifikasi" class="form-textarea min-h-[130px]">{{ $lowongan->kualifikasi }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="mt-5">
                                                            <div>
                                                                <label for="deskripsi">Deskripsi Pekerjaan</label>
                                                                <textarea id="deskripsi" name="deskripsi" class="form-textarea min-h-[130px]">{{ $lowongan->deskripsi }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-end items-center mt-8">
                                                            <button type="button" class="btn btn-outline-danger"
                                                                @click="toggle">Kembali</button>
                                                            <button type="submit"
                                                                class="btn btn-primary ltr:ml-4 rtl:mr-4"
                                                                @click="toggle">Simpan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./ Edit Modal -->

                                <!-- Delete -->
                                <form action="{{ route('lowongan.destroy', $lowongan->id) }}" method="post"
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


    <!-- Ajax Dropdown Posisi -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const departemenDropdowns = document.querySelectorAll('[id^="departemen_id"]');

            departemenDropdowns.forEach(departemenDropdown => {
                departemenDropdown.addEventListener('change', function() {
                    const idDepartemen = this.value;
                    const formContainer = this.closest('form') || this.closest('.panel');
                    const posisiDropdown = formContainer.querySelector('[id^="posisi_id"]');

                    // Reset posisi dropdown
                    posisiDropdown.innerHTML = '<option value="">Pilih Posisi</option>';

                    if (idDepartemen) {
                        // Fetch data posisi terkait departemen
                        fetch(`/get-posisi-by-departemen?departemen_id=${idDepartemen}`)
                            .then(response => response.json())
                            .then(data => {
                                // Tambahkan data posisi ke dropdown
                                data.forEach(posisi => {
                                    const option = document.createElement('option');
                                    option.value = posisi.id;
                                    option.textContent = posisi.nama_posisi;
                                    posisiDropdown.appendChild(option);
                                });
                            });
                    }
                });
            });
        });
    </script>
    <!-- ./ Ajax Dropdown Posisi -->

    <!-- Datatable Script -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("listlow", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#list_low', {
                        sortable: true,
                        searchable: true,
                        perPage: 5,
                        perPageSelect: [5, 10, 25, 50, 100],
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
