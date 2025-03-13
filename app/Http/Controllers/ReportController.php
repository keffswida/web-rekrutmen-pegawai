<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\Lowongan;
use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $lowongans = Lowongan::all();
        return view('admin.report', compact('lowongans'));
    }

    public function filter(Request $request)
    {
        $request->merge([
            'start_date' => $request->start_date . ' 00:00:00',
            'end_date' => $request->end_date . ' 23:59:59',
        ]);

        $request->validate([
            'lowongan_id' => 'required|exists:lowongan,id',
            'start_date' => 'required|date_format:Y-m-d H:i:s',
            'end_date' => 'required|date_format:Y-m-d H:i:s|after_or_equal:start_date',
        ]);

        // $count = Pelamar::where('lowongan_id', $request->lowongan_id)
        //     ->whereBetween('created_at', [$request->start_date, $request->end_date])
        //     ->count();

        // DB::enableQueryLog();

        $count = DB::table('lowongan')
            ->select('posisi_id', DB::raw('count(*) as total'))
            ->where('posisi_id', $request->lowongan_id)
            ->whereBetween('created_at', [$request->start_date, $request->end_date])
            ->groupBy('posisi_id')
            ->get();

        // dd(DB::getQueryLog());

        return response()->json(['count' => $count]);
    }

    public function exportPDF(Request $request)
    {
        // $pelamar = Pelamar::whereHas('lowongan', function ($query) use ($request) {
        //     $query->where('posisi_id', $request->lowongan_id)
        //         ->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        // })->get();

        // dd($pelamar);

        // DB::enableQueryLog();
        // dd($request->all());

        $request->merge([
            'start_date' => $request->start_date . ' 00:00:00',
            'end_date' => $request->end_date . ' 23:59:59',
        ]);

        if ($request->lowongan_id === 'all') {
            $request->merge(['lowongan_id' => null]);
        }

        $request->validate([
            // 'lowongan_id' => 'nullable|exists:lowongan,posisi_id',
            'lowongan_id' => 'nullable|exists:lowongan,posisi_id',
            'start_date' => 'required|date_format:Y-m-d H:i:s',
            'end_date' => 'required|date_format:Y-m-d H:i:s|after_or_equal:start_date',
            'status_pelamaran' => 'nullable|in:0,1,2,all'
        ]);

        // $pelamar = Pelamar::whereIn('lowongan_id', function ($query) use ($request) {
        //     $query->select('id')
        //         ->from('lowongan')
        //         ->where('posisi_id', $request->lowongan_id)
        //         ->whereBetween('created_at', [$request->start_date, $request->end_date]);
        // })->get();

        // $lowonganIds = Lowongan::where('posisi_id', $request->lowongan_id)->pluck('id');

        // if ($request->lowongan === null) {
        //     $lowonganIds = Lowongan::pluck('id');
        // } else {
        //     $lowonganIds = Lowongan::where('posisi_id', $request->lowongan_id)->pluck('id');
        // }

        if ($request->lowongan_id === null || $request->lowongan_id === 'all') {
            // Ambil semua ID lowongan
            $lowonganIds = Lowongan::pluck('id')->toArray();
        } else {
            // Ambil ID lowongan yang sesuai dengan posisi_id
            $lowonganIds = Lowongan::where('posisi_id', $request->lowongan_id)->pluck('id')->toArray();
        }

        $pelamarQuery = Pelamar::with('user')
            ->whereIn('lowongan_id', $lowonganIds)
            ->whereBetween('created_at', [$request->start_date, $request->end_date]);
        // ->get();

        if ($request->status_pelamaran !== null && $request->status_pelamaran !== 'all') {
            $pelamarQuery->where('status_pelamaran', $request->status_pelamaran);
        }

        $pelamar = $pelamarQuery->get();
        // dd($pelamar);
        // dd([
        //     'lowongan_id_input' => $request->lowongan_id,
        //     'lowonganIds' => $lowonganIds,
        //     'query_sql' => $pelamarQuery->toSql(),
        //     'query_bindings' => $pelamarQuery->getBindings(),
        //     'pelamar_count' => $pelamarQuery->count(),
        // ]);

        // dd(DB::getQueryLog());

        // Step 1: Cari posisi_id berdasarkan lowongan_id di tabel pelamar
        // $posisiIds = Lowongan::whereIn('id', Pelamar::pluck('lowongan_id'))->pluck('posisi_id');

        // // Step 2: Cari semua lowongan_id yang memiliki posisi yang sama
        // $lowonganIds = Lowongan::whereIn('posisi_id', $posisiIds)
        //     ->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59'])
        //     ->pluck('id');

        // // Step 3: Ambil pelamar yang melamar di lowongan yang memiliki posisi yang sama
        // $pelamar = Pelamar::whereIn('lowongan_id', $lowonganIds)->get();


        // Load view and generate PDF
        $pdf = app('dompdf.wrapper')->loadView('admin.reports.pelamar', compact('pelamar'));

        return $pdf->stream('laporan_pelamar.pdf');
    }
}
