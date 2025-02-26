<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Http\Requests\StorePendidikanRequest;
use App\Http\Requests\UpdatePendidikanRequest;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendidikans = Pendidikan::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('pendidikans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'nama_institusi' => 'required|string',
            'jurusan' => 'required|string',
            'gelar' => 'nullable|in:0,1,2,3',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'deskripsi_sekolah' => 'nullable',
        ]);
        // dd($validatedData);

        $pendidikan = Pendidikan::create([
            'id_pelamar' => $validatedData['id_pelamar'],
            'nama_institusi' => $validatedData['nama_institusi'],
            'jurusan' => $validatedData['jurusan'],
            'gelar' => $validatedData['gelar'],
            'tahun_masuk' => $validatedData['tahun_masuk'],
            'tahun_lulus' => $validatedData['tahun_lulus'],
            'deskripsi_sekolah' => $validatedData['deskripsi_sekolah'],
        ]);
        // dd($pendidikan);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan pendidikan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $pendidikans = Pendidikan::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('pendidikans', 'pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendidikan $pendidikan)
    {
        return view('admin.pelamar.detail', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'nama_institusi' => 'required|string',
            'jurusan' => 'required|string',
            'gelar' => 'nullable|in:0,1,2,3',
            'tahun_masuk' => 'required',
            'tahun_lulus' => 'required',
            'deskripsi_sekolah' => 'nullable',
        ]);

        $pendidikan->update($validatedData);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil memperbarui pendidikan anda!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendidikan $pendidikan)
    {
        $pelamarId = $pendidikan->id_pelamar;
        // dd($pelamarId);

        $pendidikan->delete();

        return redirect()
            ->route('pelamar.show', ['pelamar' => $pelamarId])
            ->with('success', 'Berhasil menghapus pendidikan anda!');
    }
}
