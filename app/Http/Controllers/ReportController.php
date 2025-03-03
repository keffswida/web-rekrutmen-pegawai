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

        // dd($count);

        return response()->json(['count' => $count]);
    }

    // public function exportPdf(Request $request)
    // {
    //     $request->merge([
    //         'start_date' => $request->start_date . ' 00:00:00',
    //         'end_date' => $request->end_date . ' 23:59:59',
    //     ]);

    //     $request->validate([
    //         'lowongan_id' => 'required|exists:lowongan,id',
    //         'start_date' => 'required|date_format:Y-m-d H:i:s',
    //         'end_date' => 'required|date_format:Y-m-d H:i:s|after_or_equal:start_date',
    //     ]);

    //     // $pelamar = DB::table('lowongan')
    //     //     ->select('posisi_id', DB::raw('count(*) as total'))
    //     //     ->where('posisi_id', $request->lowongan_id)
    //     //     ->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . '23:59:59'])
    //     //     ->get();

    //     // $lowongan = Lowongan::findOrFail($request->lowongan_id);

    //     $pelamar = Pelamar::with('lowongan.posisi')
    //         ->whereHas('lowongan', function ($query) use ($request) {
    //             $query->where('posisi_id', $request->lowongan_id);
    //         })
    //         ->whereBetween('created_at', [$request->start_date, $request->end_date])
    //         ->get();
    //     // ->groupBy('posisi_id');

    //     $pdf = app('dompdf.wrapper')->loadView('admin.reports.pelamar', compact('pelamar'));

    //     return $pdf->stream('laporan-pelamar.pdf');
    // }

    public function exportPDF(Request $request)
    {
        DB::enableQueryLog();
        $pelamar = Pelamar::whereHas('lowongan', function ($query) use ($request) {
            $query->where('posisi_id', $request->lowongan_id)
                ->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        })->get();

        // dd($pelamar);


        // $pelamar = Pelamar::whereIn('lowongan_id', function ($query) use ($request) {
        //     $query->select('id')
        //         ->from('lowongan')
        //         ->where('posisi_id', $request->lowongan_id)
        //         ->whereBetween('created_at', [$request->start_date . ' 00:00:00', $request->end_date . ' 23:59:59']);
        // })
        //     ->get();

        dd(DB::getQueryLog());

        // Load view and generate PDF
        $pdf = app('dompdf.wrapper')->loadView('admin.reports.pelamar', compact('pelamar'));

        return $pdf->stream('laporan_pelamar.pdf');
    }
}
