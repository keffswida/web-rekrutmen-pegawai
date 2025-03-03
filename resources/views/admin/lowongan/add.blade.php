<x-layout.admin-default>

    <div x-data="lowonganAdd">
        <form action="{{ route('lowongan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex xl:flex-row flex-col gap-2.5">
                <div class="panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6">
                    <div class="px-4">
                        <div class="flex items-center justify-between">
                            <h5 class="font-semibold text-lg dark:text-white-light">Tambah Lowongan</h5>
                            <a href="{{ route('lowongan.index') }}" class="btn btn-primary gap-2">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.4881 4.43057C13.8026 4.70014 13.839 5.17361 13.5694 5.48811L7.98781 12L13.5694 18.5119C13.839 18.8264 13.8026 19.2999 13.4881 19.5695C13.1736 19.839 12.7001 19.8026 12.4306 19.4881L6.43056 12.4881C6.18981 12.2072 6.18981 11.7928 6.43056 11.5119L12.4306 4.51192C12.7001 4.19743 13.1736 4.161 13.4881 4.43057Z"
                                        fill="currentColor" />
                                    <path
                                        d="M17.75 5.00005C17.75 4.68619 17.5546 4.40553 17.2602 4.29664C16.9658 4.18774 16.6348 4.27366 16.4306 4.51196L10.4306 11.512C10.1898 11.7928 10.1898 12.2073 10.4306 12.4881L16.4306 19.4881C16.6348 19.7264 16.9658 19.8124 17.2602 19.7035C17.5546 19.5946 17.75 19.3139 17.75 19L17.75 5.00005Z"
                                        fill="currentColor" />
                                </svg>
                                Kembali
                            </a>
                        </div>
                        <div class="flex justify-between lg:flex-row flex-col">
                            <div class="lg:w-1/2 w-full ltr:lg:mr-6 rtl:lg:ml-6 mb-6">
                                <div class="mt-4 flex items-center">
                                    <label for="departemen_id" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Departemen</label>
                                    <select id="departemen_id" name="departemen_id" class="form-select flex-1">
                                        <option value="">Pilih Departemen</option>
                                        @foreach ($departemen as $departemen)
                                            <option value="{{ $departemen->id }}">
                                                {{ $departemen->nama_departemen }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <label for="posisi_id" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nama Posisi</label>
                                    <select id="posisi_id" name="posisi_id" class="form-select flex-1">
                                        <option value="">Pilih Posisi</option>
                                        @foreach ($posisi as $posisi)
                                            <option value="{{ $posisi->id }}">
                                                {{ $posisi->nama_posisi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <label for="tgl_buka" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal Buka</label>
                                    <input id="tgl_buka" type="date" name="tgl_buka" class="form-input flex-1" />
                                </div>
                                <div class="mt-4 flex items-center">
                                    <label for="tgl_tutup" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal Tutup</label>
                                    <input id="tgl_tutup" type="date" name="tgl_tutup" class="form-input flex-1" />
                                </div>
                            </div>
                            <div class="lg:w-1/2 w-full">

                                <div class="flex items-center mt-4">
                                    <label for="lokasi" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Lokasi Penempatan</label>
                                    <input id="lokasi" type="text" name="lokasi" class="form-input flex-1"
                                        placeholder="Masukkan Lokasi" />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="status_low" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Status Lowongan</label>
                                    <select id="status_low" name="status_low" class="form-select flex-1">
                                        <option value="">Status</option>
                                        <option value="0">Aktif</option>
                                        <option value="1">Non-Aktif</option>
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="kebutuhan_pelamar" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Kebutuhan
                                        Pelamar</label>
                                    <input id="kebutuhan_pelamar" type="number" name="kebutuhan_pelamar"
                                        class="form-input flex-1" placeholder="Masukkan Kebutuhan Pelamar" />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="brosur" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Brosur Pelamar</label>
                                    <input id="brosur" type="file" name="brosur" class="form-input flex-1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 px-4">
                        <div>
                            <label for="kualifikasi">Kualifikasi</label>
                            <textarea id="kualifikasi" name="kualifikasi" class="form-textarea min-h-[130px]" placeholder="Kualifikasi...."></textarea>
                        </div>
                    </div>
                    <div class="mt-5 px-4">
                        <div>
                            <label for="deskripsi">Deskripsi Pekerjaan</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-textarea min-h-[130px]" placeholder="Deskripsi...."></textarea>
                        </div>
                    </div>
                    <div class="mt-6 px-4">
                        <button type="submit" class="btn btn-success w-full gap-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ltr:mr-2 rtl:ml-2 shrink-0">
                                <path
                                    d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 11.6585 22 11.4878 21.9848 11.3142C21.9142 10.5049 21.586 9.71257 21.0637 9.09034C20.9516 8.95687 20.828 8.83317 20.5806 8.58578L15.4142 3.41944C15.1668 3.17206 15.0431 3.04835 14.9097 2.93631C14.2874 2.414 13.4951 2.08581 12.6858 2.01515C12.5122 2 12.3415 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path
                                    d="M17 22V21C17 19.1144 17 18.1716 16.4142 17.5858C15.8284 17 14.8856 17 13 17H11C9.11438 17 8.17157 17 7.58579 17.5858C7 18.1716 7 19.1144 7 21V22"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path opacity="0.5" d="M7 8H13" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Ajax Dropdown Posisi -->
    <script>
        document.getElementById('departemen_id').addEventListener('change', function() {
            let idDepartemen = this.value;

            // Hapus semua opsi sebelumnya
            let posisiDropdown = document.getElementById('posisi_id');
            posisiDropdown.innerHTML = '<option value="">Pilih Posisi</option>';

            if (idDepartemen) {
                // Kirim permintaan AJAX untuk mendapatkan posisi berdasarkan departemen
                fetch(`/get-posisi-by-departemen?departemen_id=${idDepartemen}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(posisi => {
                            let option = document.createElement('option');
                            option.value = posisi.id;
                            option.textContent = posisi.nama_posisi;
                            posisiDropdown.appendChild(option);
                        });
                    });
            }
        });
    </script>
    <!-- ./ Ajax Dropdown Posisi -->

</x-layout.admin-default>
