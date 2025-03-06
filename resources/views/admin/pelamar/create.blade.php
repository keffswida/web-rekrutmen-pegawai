<x-layout.admin-default>

    <div x-data="pelamarAdd">
        <form action="{{ route('pelamar.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="flex xl:flex-row flex-col gap-2.5">
                <div class="panel px-0 flex-1 py-6 ltr:xl:mr-6 rtl:xl:ml-6">
                    <div class="px-4">
                        <h5 class="font-semibold text-lg dark:text-white-light">FORM PELAMAR</h5>

                        <hr class="border-[#e0e6ed] dark:border-[#1b2e4b] my-6">

                        <div class="flex justify-between lg:flex-row flex-col gap-4">
                            <!-- Left Column -->
                            <div class="lg:w-1/2 w-full">
                                <div class="flex items-center mt-4">
                                    <label for="lowongan_id" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Lowongan</label>
                                    <select id="lowongan_id" name="lowongan_id" class="form-select flex-1" required>
                                        <option value="">Pilih Lowongan</option>
                                        @foreach ($lowongan as $l)
                                            <option value="{{ $l->id }}">{{ $l->posisi->nama_posisi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="nama_lengkap" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nama Lengkap</label>
                                    <input id="nama_lengkap" type="text" name="nama_lengkap"
                                        class="form-input flex-1" placeholder="Masukkan Nama Lengkap" required />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="nama_panggilan" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Nama
                                        Panggilan</label>
                                    <input id="nama_panggilan" type="text" name="nama_panggilan"
                                        class="form-input flex-1" placeholder="Masukkan Nama Panggilan" required />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="jenis_kelamin" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Jenis
                                        Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select flex-1" required>
                                        <option value="">Jenis Kelamin</option>
                                        <option value="0">Laki-Laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="agama" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Agama</label>
                                    <select id="agama" name="agama" class="form-select flex-1" required>
                                        <option value="">Agama</option>
                                        <option value="0">Islam</option>
                                        <option value="1">Kristen</option>
                                        <option value="2">Katolik</option>
                                        <option value="3">Hindu</option>
                                        <option value="4">Buddha</option>
                                        <option value="5">Konghucu</option>
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="tempat_lahir" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tempat Lahir</label>
                                    <input id="tempat_lahir" type="text" name="tempat_lahir"
                                        class="form-input flex-1" placeholder="Masukkan Tempat Lahir" required />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="tgl_lahir" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Tanggal Lahir</label>
                                    <input id="tgl_lahir" type="date" name="tgl_lahir" class="form-input flex-1"
                                        required />
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="lg:w-1/2 w-full">
                                <div class="flex items-center mt-4">
                                    <label for="status_kawin" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Status
                                        Pernikahan</label>
                                    <select id="status_kawin" name="status_kawin" class="form-select flex-1" required>
                                        <option value="">Status Pernikahan</option>
                                        <option value="0">Sudah Menikah</option>
                                        <option value="1">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="alamat" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-textarea flex-1" placeholder="Masukkan Alamat" required></textarea>
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="no_telp" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">No. Telepon</label>
                                    <input id="no_telp" type="number" name="no_telp" class="form-input flex-1"
                                        placeholder="Masukkan No. Telepon" required />
                                </div>
                                {{-- <div class="flex items-center mt-4">
                                    <label for="email" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Email</label>
                                    <input id="email" type="email" name="email" class="form-input flex-1"
                                        placeholder="Masukkan Email" required />
                                </div>
                                <div class="flex items-center mt-4">
                                    <label for="password" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-0">Password</label>
                                    <input id="password" type="password" name="password" class="form-input flex-1"
                                        placeholder="Masukkan Password" required />
                                </div> --}}
                            </div>
                        </div>

                        <!-- File Upload Section -->
                        <div class="w-full mt-4">
                            <div class="mt-4">
                                <label for="profile" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-2">Upload Foto Potrait
                                    Anda!</label>
                                <input id="profile" name="profile" type="file"
                                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary mb-3"
                                    required />
                            </div>
                            <div>
                                <label for="cv" class="ltr:mr-2 rtl:ml-2 w-1/3 mb-2">Upload CV Anda!</label>
                                <input id="cv" name="cv" type="file"
                                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file:ml-5 file:text-white file:hover:bg-primary mb-3"
                                    required />
                            </div>
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

</x-layout.admin-default>
