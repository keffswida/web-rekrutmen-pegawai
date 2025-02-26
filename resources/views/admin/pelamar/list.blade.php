<x-layout.admin-default>

    <script src="/assets/js/simple-datatables.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div x-data="listPelamar">
        <div class="panel mt-6">
            <div class="flex items-center justify-between mb-4">
                <h5 class="font-semibold text-lg dark:text-white-light">List Pelamar</h5>
                {{-- 
                <a href="{{ route('pelamar.create') }}" class="btn btn-warning gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="w-5 h-5">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Tambah Data
                </a> --}}
            </div>
            <table id="list_pelamar" class="whitespace-nowrap table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="text-center">Aksi</th>
                        <th>Lowongan</th>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('{{ route('pelamar.data') }}')
                .then(response => response.json())
                .then(responseData => {
                    console.log(responseData);

                    const table = document.querySelector("#list_pelamar");
                    const firstRow = document.querySelector("#list_pelamar");
                    const dataTable = new simpleDatatables.DataTable(table, {
                        data: {
                            headings: ['No', 'Aksi', 'Lowongan', 'Nama Lengkap', 'Nama Panggilan',
                                'No. Telp', 'Email', 'Alamat'
                            ],
                            data: responseData.data.map((item, index) => [
                                index + 1,
                                `<div class="flex items-center">
                                    <div>
                                        <button type="button" @click="toggle" class="flex items-center justify-center w-8 h-8 hover:text-warning">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5">
                                                <path opacity="0.5"
                                                    d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                                <path
                                                    d="M17.3009 2.80624L16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9L8.03811 15.0229C7.9492 15.2897 8.01862 15.5837 8.21744 15.7826C8.41626 15.9814 8.71035 16.0508 8.97709 15.9619L10.1 15.5876L11.8354 15.0091C12.3775 14.8284 12.6485 14.7381 12.9035 14.6166C13.2043 14.4732 13.4886 14.2975 13.7513 14.0926C13.9741 13.9188 14.1761 13.7168 14.5801 13.3128L20.5449 7.34795L21.1938 6.69914C22.2687 5.62415 22.2687 3.88124 21.1938 2.80624C20.1188 1.73125 18.3759 1.73125 17.3009 2.80624Z"
                                                    stroke="currentColor" stroke-width="1.5"></path>
                                                <path opacity="0.5"
                                                    d="M16.6522 3.45508C16.6522 3.45508 16.7333 4.83381 17.9499 6.05034C19.1664 7.26687 20.5451 7.34797 20.5451 7.34797M10.1002 15.5876L8.4126 13.9"
                                                    stroke="currentColor" stroke-width="1.5"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <a href="#" class="flex items-center justify-center w-8 h-8 hover:text-primary">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z"
                                                stroke="currentColor" stroke-width="1.5"></path>
                                            <path
                                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                                stroke="currentColor" stroke-width="1.5"></path>
                                        </svg>
                                    </a>
                                    <form action="#" method="post"
                                        class="flex items-center justify-center w-8 h-8 hover:text-danger">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Apakah anda yakin?')">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                class="w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.1709 4C9.58273 2.83481 10.694 2 12.0002 2C13.3064 2 14.4177 2.83481 14.8295 4"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path
                                                    d="M18.8332 8.5L18.3732 15.3991C18.1962 18.054 18.1077 19.3815 17.2427 20.1907C16.3777 21 15.0473 21 12.3865 21H11.6132C8.95235 21 7.62195 21 6.75694 20.1907C5.89194 19.3815 5.80344 18.054 5.62644 15.3991L5.1665 8.5"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                                <path d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>`,
                                item.lowongan,
                                item.nama_lengkap,
                                item.nama_panggilan,
                                item.no_telp,
                                item.email,
                                item.alamat
                            ])
                        },
                        sortable: true,
                        searchable: true,
                        perPage: 10,
                        perPageSelect: [10, 25, 30, 50, 100],
                        firstLast: true,
                        labels: {
                            perPage: "{select}",
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}"
                        }
                    });
                })
        })
    </script>

</x-layout.admin-default>
