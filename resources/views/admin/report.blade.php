<x-layout.admin-default>
    <div>
        <div class="panel mt-6">
            <div class="flex items-center">
                <h2 class="text-2xl font-semibold">Laporan</h2>
            </div>
            <div class="card p-4">
                <div class="row">
                    <div class="col-md-4">

                        @php
                            $uniquePosisi = $lowongans->unique('posisi_id');
                        @endphp

                        <label>Pilih Lowongan</label>
                        <select id="lowongan_id" class="form-select">
                            <option value="">-- Pilih Lowongan --</option>
                            @foreach ($uniquePosisi as $lowongan)
                                <option value="{{ $lowongan->posisi_id }}">{{ $lowongan->posisi->nama_posisi }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mt-4">
                        <label>Dari Tanggal</label>
                        <input type="date" id="start_date" class="form-input">
                    </div>
                    <div class="col-md-3 mt-4">
                        <label>Sampai Tanggal</label>
                        <input type="date" id="end_date" class="form-input">
                    </div>
                    <div class="col-md-2 d-flex align-items-end mt-4 space-y-2">
                        <button class="btn btn-primary w-100" id="filterBtn">Filter</button>
                        <button class="btn btn-danger w-100" id="exportPdfBtn">Export PDF</button>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h4>Jumlah Pelamar: <span id="result">-</span></h4>
            </div>
        </div>
    </div>


</x-layout.admin-default>
{{-- <script>
    $(document).ready(function() {
        $("#filterBtn").click(function() {
            let lowongan_id = $("#lowongan_id").val();
            let start_date = $("#start_date").val();
            let end_date = $("#end_date").val();

            console.log("Lowongan ID:", lowongan_id);
            console.log("Start Date:", start_date);
            console.log("End Date:", end_date);

            if (!lowongan_id || !start_date || !end_date) {
                alert("Silahkan isi semua filter!")
                return;
            }

            $.ajax({
                type: "POST",
                url: "{{ route('reports.filter') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    lowongan_id: lowongan_id,
                    start_date: start_date,
                    end_date: end_date,
                },
                success: function(response) {
                    console.log(response.count);

                    if (response.count.length > 0) {
                        let totalCount = response.count.map(item => item.total).join(
                            ", ");
                        $('#result').text(totalCount);
                    } else {
                        $('#result').text("0");
                    }

                    // $('#result').text(response.count);
                },
                error: function() {
                    alert('Terjadi Kesalahan, silahkan coba lagi!');
                },
            });
        });
    });
</script> --}}

<script>
    $(document).ready(function() {
        $("#filterBtn").click(function() {
            let lowongan_id = $("#lowongan_id").val();
            let start_date = $("#start_date").val();
            let end_date = $("#end_date").val();

            console.log("Lowongan ID:", lowongan_id);
            console.log("Start Date:", start_date);
            console.log("End Date:", end_date);

            if (!lowongan_id || !start_date || !end_date) {
                alert("Silahkan isi semua filter!");
                return;
            }

            $.ajax({
                type: "POST",
                url: "{{ route('reports.filter') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    lowongan_id: lowongan_id,
                    start_date: start_date,
                    end_date: end_date,
                },
                success: function(response) {
                    if (response.count.length > 0) {
                        let totalCount = response.count.map(item => item.total).join(", ");
                        $('#result').text(totalCount);
                    } else {
                        $('#result').text("0");
                    }
                },
                error: function() {
                    alert('Terjadi Kesalahan, silahkan coba lagi!');
                },
            });
        });

        // Handle PDF Export
        $("#exportPdfBtn").click(function() {
            let lowongan_id = $("#lowongan_id").val();
            let start_date = $("#start_date").val();
            let end_date = $("#end_date").val();

            if (!lowongan_id || !start_date || !end_date) {
                alert("Silahkan isi semua filter!");
                return;
            }

            let pdfUrl = "{{ route('reports.exportPDF') }}?lowongan_id=" + lowongan_id +
                "&start_date=" + start_date + "&end_date=" + end_date;
            window.open(pdfUrl, '_blank');
        });
    });
</script>
