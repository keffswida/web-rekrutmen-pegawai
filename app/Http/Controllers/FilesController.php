<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $files = Files::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = Files::with('pelamar')->orderBy('created_at', 'desc')->get();

        return view('admin.pelamar.detail', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'ijazah_terakhir' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
            'transkrip_nilai' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        ]);

        $ijazahPath = null;
        if ($request->hasFile('ijazah_terakhir')) {
            $ijazahPath = $request->file('ijazah_terakhir')->store('ijazah', 'public');
        }

        $transkripPath = null;
        if ($request->hasFile('transkrip_nilai')) {
            $transkripPath = $request->file('transkrip_nilai')->store('transkrip', 'public');
        }

        $files = Files::create([
            'id_pelamar' => $validatedData['id_pelamar'],
            'ijazah_terakhir' => $ijazahPath,
            'transkrip_nilai' => $transkripPath,
        ]);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $validatedData['id_pelamar']])
            ->with('success', 'Berhasil menambahkan beberapa file!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $files = Files::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('files', 'pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Files $files)
    {
        return view('admin.pelamar.detail', compact('files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Files $files)
    {
        // $validatedData = $request->validate([
        //     'id_pelamar' => 'required|exists:pelamar,id',
        //     'ijazah_terakhir' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        //     'transkrip_nilai' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        // ]);
        $validator = Validator::make($request->all(), [
            'id_pelamar' => 'required|exists:pelamar,id',
            'ijazah_terakhir' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
            'transkrip_nilai' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
        ]);
        // dd($validator);
        $data = $request->all();

        // if ($request->hasFile('ijazah_terakhir')) {
        //     if ($files->ijazah_terakhir) {
        //         Storage::disk('public')->delete($files->ijazah_terakhir);

        //         $folderIjazah = dirname($files->ijazah_terakhir);
        //     } else {
        //         $folderIjazah = '/ijazah';
        //     }

        //     $ijazahPath = $request->file('ijazah_terakhir')->store($folderIjazah, 'public');
        //     $data['ijazah_terakhir'] = $ijazahPath;
        // } else {
        //     unset($data['ijazah_terakhir']);
        // }

        // if ($request->hasFile('transkrip_nilai')) {
        //     if ($files->transkrip_nilai) {
        //         Storage::disk('public')->delete($files->transkrip_nilai);

        //         $folderTranskrip = dirname($files->transkrip_nilai);
        //     } else {
        //         $folderTranskrip = '/transkrip';
        //     }

        //     $transkripPath = $request->file('transkrip_nilai')->store($folderTranskrip, 'public');
        //     $data['transkrip_nilai'] = $transkripPath;
        // } else {
        //     unset($data['transkrip_nilai']);
        // }
        $existingFile = Files::where('id_pelamar', $request->id_pelamar)->first();
        if ($existingFile) {
            if ($existingFile->ijazah_terakhir) {
                Storage::disk('public')->delete($existingFile->ijazah_terakhir);
            }
            if ($existingFile->transkrip_nilai) {
                Storage::disk('public')->delete($existingFile->transkrip_nilai);
            }
            $existingFile->delete();
        }

        if ($request->hasFile('ijazah_terakhir')) {
            $data['ijazah_terakhir'] = $request->file('ijazah_terakhir')->store('ijazah', 'public');
        }

        if ($request->hasFile('transkrip_nilai')) {
            $data['transkrip_nilai'] = $request->file('transkrip_nilai')->store('transkrip', 'public');
        }

        // dd($data['id_pelamar']);

        // $files->update($data);
        $newFile = Files::create([
            'id_pelamar' => $request->id_pelamar,
            'ijazah_terakhir' => $data['ijazah_terakhir'] ?? null,
            'transkrip_nilai' => $data['transkrip_nilai'] ?? null,
        ]);

        return redirect()
            ->route('pelamar.show', ['pelamar' => $data['id_pelamar']])
            ->with('success', 'Berhasil memperbarui beberapa file anda!');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Files $files)
    // {
    //     $pelamarId = $files->id_pelamar;

    //     dd($files->id_pelamar);

    //     if ($files->ijazah_terakhir) {
    //         Storage::disk('public')->delete($files->ijazah_terakhir);
    //     }

    //     if ($files->transkrip_nilai) {
    //         Storage::disk('public')->delete($files->transkrip_nilai);
    //     }

    //     $files->delete();

    //     return redirect()
    //         ->route('pelamar.show', ['pelamar' => $pelamarId])
    //         ->with('success', 'Berhasil menghapus beberapa file anda!');
    // }
    public function destroy(string $id)
    {
        $file = Files::find($id);

        if (!$file) {
            return redirect()
                ->back()
                ->with('error', 'File tidak ditemukan.');
        }

        // Hapus file dari storage jika ada
        if ($file->ijazah_terakhir) {
            Storage::disk('public')->delete($file->ijazah_terakhir);
        }
        if ($file->transkrip_nilai) {
            Storage::disk('public')->delete($file->transkrip_nilai);
        }

        // Ambil ID pelamar sebelum dihapus (untuk redirect)
        $id_pelamar = $file->id_pelamar;

        // Hapus data dari database
        $file->delete();

        // Redirect ke halaman pelamar dengan pesan sukses
        return redirect()
            ->route('pelamar.show', ['pelamar' => $id_pelamar])
            ->with('success', 'Berhasil menghapus file Anda!');
    }
}
