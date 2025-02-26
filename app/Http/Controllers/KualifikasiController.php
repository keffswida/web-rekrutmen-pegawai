<?php

namespace App\Http\Controllers;

use App\Models\Kualifikasi;
use Illuminate\Http\Request;

class KualifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kualifikasis = Kualifikasi::all();
        return view('admin.master.kualifikasi.kualifikasi', compact('kualifikasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.kualifikasi.kualifikasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kualifikasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        Kualifikasi::create($validated);

        return redirect()->route('kualifikasi.index')->with('success', 'Berhasil menambahkan kualifikasi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kualifikasi $kualifikasi)
    {
        return view('kualifikasi.show', compact('kualifikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kualifikasi $kualifikasi)
    {
        return view('kualifikasi.edit', compact('kualifikasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kualifikasi $kualifikasi)
    {
        $validated = $request->validate([
            'nama_kualifikasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        $kualifikasi->update($validated);

        return redirect()->route('kualifikasi.index')->with('success', 'Kualifikasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kualifikasi $kualifikasi)
    {
        $kualifikasi->delete();

        return redirect()->route('kualifikasi.index')->with('success', 'Kualifikasi berhasil dihapus!');
    }
}
