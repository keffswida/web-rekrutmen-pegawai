<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertifikats = Sertifikat::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('sertifikats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sertifikat = Sertifikat::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('sertifikat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'sertifikat' => 'required|array',
            'sertifikat_image.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        ]);
        // dd($validatedData);
        // echo ('tes');

        $sertifikatImage = [];
        if ($request->hasFile('sertifikat_image')) {
            foreach ($request->file('sertifikat_image') as $image) {
                $sertifikatImage[] = $image->store('sertifikat_image', 'public');
            }
        }

        $sertifikat = Sertifikat::create([
            'id_pelamar' => $validatedData['id_pelamar'],
            'sertifikat' => json_encode($validatedData['sertifikat']),
            'sertifikat_image' => json_encode($sertifikatImage),
        ]);
        // dd($sertifikat);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan sertifikat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $sertifikats = Sertifikat::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('sertifikats', 'pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        return view('admin.pelamar.detail', compact('sertifikat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        $validatedData = $request->validate([
            'sertifikat' => 'required|array',
            'sertifikat_image.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        ]);

        $sertifikatImage = [];
        if ($request->hasFile('sertifikat_image')) {
            if ($sertifikat->sertifikat_image) {
                $old = json_decode($sertifikat->sertifikat_image);
                foreach ($old as $image) {
                    if (Storage::disk('public')->exists($image)) {
                        Storage::disk('public')->delete($image);
                    }
                }
            }

            foreach ($request->file('sertifikat_image') as $image) {
                $sertifikatImage[] = $image->store('sertifikat_image', 'public');
            }
        } else {
            $validatedData['sertifikat'] = $sertifikat->sertifikat_image;
        }

        $validatedData['sertifikat'] = json_encode($validatedData['sertifikat']);

        $sertifikat->update($validatedData);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $sertifikat->id_pelamar])
            ->with('success', 'Berhasil memperbarui sertifikat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        $pelamarId = $sertifikat->id_pelamar;

        if ($sertifikat->sertifikat_image) {
            $images = json_decode($sertifikat->sertifikat_image);
            foreach ($images as $image) {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
        }

        $sertifikat->delete();

        return redirect()
            ->route('pelamar.show', ['pelamar' => $pelamarId])
            ->with('success', 'Berhasil menghapus sertifikat!');
    }
}
