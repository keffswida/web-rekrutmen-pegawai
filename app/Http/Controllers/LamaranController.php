<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function index()
    {
        $lamaran = Pelamar::where('user_id', Auth::id())
            ->with(['lowongan', 'posisi', 'departemen'])
            ->get();

        // dd($lamaran->toArray());

        return view('user.profile', compact('lamaran'));
    }

    public function getDetail($id)
    {
        $lamaran = Pelamar::where('id', $id)
            ->with(['lowongan', 'posisi', 'departemen'])
            ->first();

        // dd($lamaran->toArray());

        if (!$lamaran) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'posisi' => $lamaran->lowongan->posisi->nama_posisi ?? '-',
            'tgl_melamar' => $lamaran->created_at->format('d M Y'),
            'status' => match ((int) $lamaran->status) {
                0 => 'Pengajuan',
                1 => 'Proses Lanjut',
                2 => 'Ditolak',
                default => 0,
            },
            'catatan' => $lamaran->catatan ?? '-',
        ]);
    }
}
