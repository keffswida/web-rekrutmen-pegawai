<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use App\Models\Lowongan;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $lowongans = Lowongan::with(['posisi', 'departemen'])
        //     ->orderBy('created_at', 'desc')
        //     ->get();
        $lowongans = Lowongan::all();
        $posisi = Posisi::where('status', '=', '0')->get();
        $departemen = Departemen::where('status', '=', '0')->get();

        return view('admin.lowongan.list', compact('lowongans', 'posisi', 'departemen'));
    }

    // public function getDataLowongan()
    //  {
    //     if ($request->ajax()) {
    //         $data = Pelamar::select()
    //     }
    // }

    public function getPosisiByDepartemen(Request $request)
    {
        $departemen_id = $request->departemen_id;

        $posisi = Posisi::where('departemen_id', $departemen_id)
            ->where('status', '0')
            ->get();

        return response()->json($posisi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posisi = Posisi::where('status', '=', '0')->get();
        $departemen = Departemen::where('status', '=', '0')->get();
        // dd($posisi);

        return view('admin.lowongan.add', compact('posisi', 'departemen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'posisi_id' => 'required|exists:posisi,id',
            'departemen_id' => 'required|exists:departemen,id',
            'lokasi' => 'required|string|max:255',
            'tgl_buka' => 'required|date',
            'tgl_tutup' => 'required|date|after:tgl_buka',
            'kualifikasi' => 'required|string',
            'deskripsi' => 'required|string',
            'kebutuhan_pelamar' => 'required|integer',
            'brosur' => 'nullable|file|mimes:png,jpg,jpeg',
            'status_low' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        // dd($data);

        // if ($request->hasFile('brosur')) {
        //     $data['brosur'] = $request->file('brosur')->store('brosur', 'public');
        // }
        $data['brosur'] = null;
        if ($request->hasFile('brosur')) {
            $data['brosur'] = $request->file('brosur')->store('brosur', 'public');
        }

        Lowongan::create($data);

        return redirect()->route('lowongan.index')
            ->with('success', 'Berhasil membuat lowongan baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lowongan $lowongan)
    {
        return view('lowongan.show', compact('lowongan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lowongan $lowongan)
    {
        // $posisi = Posisi::all();
        $posisi = Posisi::where('status', '0')->get();
        // $departemen = Departemen::all();
        $departemen = Departemen::where('status', '0')->get();

        return view('lowongan.index', compact('lowongan', 'posisi', 'departemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lowongan $lowongan)
    {
        $validator = Validator::make($request->all(), [
            'posisi_id' => 'required|exists:posisi,id',
            'departemen_id' => 'required|exists:departemen,id',
            'lokasi' => 'required|string|max:255',
            'tgl_buka' => 'required|date',
            'tgl_tutup' => 'required|date|after:tgl_buka',
            'kualifikasi' => 'required|string',
            'deskripsi' => 'required|string',
            'kebutuhan_pelamar' => 'required|integer',
            'brosur' => 'nullable|file|mimes:png,jpg,jpeg',
            'status_low' => 'required|in:0,1',
        ]);

        // dd($validator);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();

        // if ($request->hasFile('brosur')) {
        //     if ($lowongan->brosur && Storage::disk('public')->exists($lowongan->brosur)) {
        //         Storage::disk('public')->delete($lowongan->brosur);
        //     }

        //     $data['brosur'] = $request->file('brosur')->store('brosur', 'public');
        // }
        if ($request->hasFile('brosur')) {
            if ($lowongan->brosur) {
                Storage::disk('public')->delete($lowongan->brosur);

                $folderBrosur = dirname($lowongan->brosur);
            } else {
                $folderBrosur = '/brosur';
            }

            $brosurPath = $request->file('brosur')->store($folderBrosur, 'public');
            $data['brosur'] = $brosurPath;
        } else {
            unset($data['brosur']);
        }

        // dd($data);

        $lowongan->update($data);

        return redirect()->route('lowongan.index')
            ->with('success', 'Lowongan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lowongan $lowongan)
    {
        if ($lowongan->brosur) {
            Storage::disk('public')->delete($lowongan->brosur);
        }

        $lowongan->delete();

        return redirect()->route('lowongan.index')
            ->with('success', 'Lowongan berhasil dihapus!');
    }
}
