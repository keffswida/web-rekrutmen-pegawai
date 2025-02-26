<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalamans = Pengalaman::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('pengalamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengalamans = Pengalaman::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('pengalamans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'tempat_kerja' => 'required|string',
            'posisi_kerja' => 'required|string',
            'periode_kerja' => 'required|string',
            'deskripsi_kerja' => 'required|string',
        ]);

        $pengalaman = Pengalaman::create([
            'id_pelamar' => $validatedData['id_pelamar'],
            'tempat_kerja' => $validatedData['tempat_kerja'],
            'posisi_kerja' => $validatedData['posisi_kerja'],
            'periode_kerja' => $validatedData['periode_kerja'],
            'deskripsi_kerja' => $validatedData['deskripsi_kerja'],
        ]);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan keterampilan anda!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $pengalamans = Pengalaman::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('pengalamans', 'pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengalaman $pengalaman)
    {
        return view('admin.pelamar.detail', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengalaman $pengalaman)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'tempat_kerja' => 'required|string',
            'posisi_kerja' => 'required|string',
            'periode_kerja' => 'required|string',
            'deskripsi_kerja' => 'required|string',
        ]);

        $pengalaman->update($validatedData);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan keterampilan anda!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengalaman $pengalaman)
    {
        $pelamarId = $pengalaman->id_pelamar;

        $pengalaman->delete();

        return redirect()
            ->route('pelamar.show', ['pelamar' => $pelamarId])
            ->with('success', 'Berhasil menghapus pengalaman anda!');
    }
}
