<x-layout.user-default>
    <div class="container mx-auto my-14 px-6 py-10 font-inter font-light">
        <h2 class="text-2xl font-semibold mb-4 mt-5">Status Lamaran</h2>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 p-2">Posisi</th>
                        <th class="border border-gray-300 p-2">Tanggal Melamar</th>
                        <th class="border border-gray-300 p-2">Status</th>
                        <th class="border border-gray-300 p-2">Catatan</th>
                        <th class="border border-gray-300 p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lamaran as $l)
                        <tr class="border text-center">
                            <td class="border p-2">{{ $l->lowongan->posisi->nama_posisi ?? 'Tidak Ada Posisi' }}</td>
                            <td class="border p-2">{{ $l->created_at->format('d M Y') }}</td>
                            <td class="border p-2">
                                <span
                                    class="px-3 py-1 rounded-lg
                                    {{ $l->status == '0' ? 'bg-yellow-500 text-white' : '' }}
                                    {{ $l->status == '1' ? 'bg-green-500 text-white' : '' }}
                                    {{ $l->status == '2' ? 'bg-red-500 text-white' : '' }}">
                                    @if ($l->status == '0')
                                        <span>Pending</span>
                                    @elseif($l->status == '1')
                                        <span>Diterima</span>
                                    @elseif($l->status == '2')
                                        <span>Ditolak</span>
                                    @endif
                                </span>
                            </td>
                            <td class="border p-2">
                                {{ \Illuminate\Support\Str::words($l->catatan ?? '-', 5, ' ...') }}
                            </td>
                            <td class="border p-2 text-center">
                                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 detail-btn"
                                    data-id="{{ $l->id }}">
                                    Lihat Detail
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <!-- Modal Detail Lamaran -->
        <div id="detailModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h3 class="text-xl font-semibold mb-4">Detail Lamaran</h3>
                <div id="modalContent">
                    <p><strong>Posisi:</strong> <span id="modalPosisi"></span></p>
                    <p><strong>Tanggal Melamar:</strong> <span id="modalTanggal"></span></p>
                    <p><strong>Status:</strong> <span id="modalStatus"></span></p>
                    <p><strong>Catatan:</strong> <span id="modalCatatan"></span></p>
                </div>
                <button id="closeModal"
                    class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Tutup</button>
            </div>
        </div>


    </div>

    {{-- <script>
        function showDetail(id) {
            fetch(`/profile/${id}`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('modalPosisi').innerText = data.posisi;
                    document.getElementById('modalTanggal').innerText = data.tanggal_melamar;
                    document.getElementById('modalStatus').innerText = data.status;
                    document.getElementById('modalCatatan').innerText = data.catatan || "-";
                    document.getElementById('modalDetail').classList.remove('hidden');
                });
        }

        function closeModal() {
            document.getElementById('modalDetail').classList.add('hidden');
        }
    </script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".detail-btn").on("click", function() {
                let pelamarId = $(this).data("id");

                $.ajax({
                    url: "/profile/" + pelamarId,
                    type: "GET",
                    success: function(response) {
                        $("#modalPosisi").text(response.posisi);
                        $("#modalTanggal").text(response.tgl_melamar);
                        $("#modalStatus").text(response.status);
                        $("#modalCatatan").text(response.catatan || "-");

                        $("#detailModal").removeClass("hidden");
                    },
                    error: function(xhr) {
                        alert("Gagal mengambil data.");
                    }
                });
            });

            $("#closeModal").on("click", function() {
                $("#detailModal").addClass("hidden");
            });
        });
    </script>


</x-layout.user-default>
