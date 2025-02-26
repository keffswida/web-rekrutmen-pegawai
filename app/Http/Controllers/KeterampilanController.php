<?php

namespace App\Http\Controllers;

use App\Models\Keterampilan;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class KeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keterampilans = Keterampilan::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('keterampilans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keterampilans = Keterampilan::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('keterampilans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'bidang_keterampilan' => 'required|string',
            'keterampilan_terkait' => 'required|string|max:1024',
        ]);

        $keterampilan = Keterampilan::create([
            'id_pelamar' => $validatedData['id_pelamar'],
            'bidang_keterampilan' => $validatedData['bidang_keterampilan'],
            'keterampilan_terkait' => $validatedData['keterampilan_terkait'],
        ]);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan keterampilan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $keterampilans = Keterampilan::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('keterampilans', 'pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keterampilan $keterampilan)
    {
        return view('admin.pelamar.detail', compact('keterampilan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keterampilan $keterampilan)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'bidang_keterampilan' => 'required|string',
            'keterampilan_terkait' => 'required|string|max:1024',
        ]);

        $keterampilan->update($validatedData);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil memperbarui keterampilan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keterampilan $keterampilan)
    {
        $pelamarId = $keterampilan->id_pelamar;

        $keterampilan->delete();

        return redirect()
            ->route('pelamar.show', ['pelamar' => $pelamarId])
            ->with('success', 'Berhasil menghapus keterampilan!');
    }
}
