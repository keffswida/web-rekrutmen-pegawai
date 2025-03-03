{{-- <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pelamar</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan Data Pelamar</h2>
    <p>Periode: {{ request('start_date') }} - {{ request('end_date') }}</p>

    @foreach ($pelamar as $posisi_id => $group)
        <h3>Lowongan: {{ $group->first()->lowongan->posisi->nama_posisi }}</h3>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($group as $index => $pelamar)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pelamar->nama_lengkap }}</td>
                        <td>{{ $pelamar->nama_panggilan }}</td>
                        <td>{{ $pelamar->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $pelamar->email }}</td>
                        <td>{{ $pelamar->no_telp }}</td>
                        <td>{{ $pelamar->alamat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    @endforeach

</body>

</html> --}}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Laporan Pelamar</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan Data Pelamar</h2>
    <p>Periode: {{ request('start_date') }} - {{ request('end_date') }}</p>

    @if ($pelamar->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Nama Panggilan</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Lowongan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelamar as $data)
                    <tr>
                        <td>{{ $data->nama_lengkap }}</td>
                        <td>{{ $data->nama_panggilan }}</td>
                        <td>{{ $data->jenis_kelamin == 0 ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->lowongan->posisi->nama_posisi ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p><strong>Tidak ada data pelamar untuk filter ini.</strong></p>
    @endif

</body>

</html>
