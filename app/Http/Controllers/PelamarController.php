<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use App\Models\Pelamar;
use App\Models\Lowongan;
use App\Models\Departemen;
use App\Models\Files;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Sertifikat;
use App\Models\Keterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelamars = Pelamar::all();
        $departemen = Departemen::all();
        $posisi = Posisi::all();
        $lowongan = Lowongan::all();

        return view('admin.pelamar.list', compact('pelamars', 'lowongan', 'departemen', 'posisi'));
    }

    public function getDataPelamar()
    {
        try {
            $pelamars = Pelamar::with(['lowongan', 'departemen', 'posisi'])
                ->orderBy('created_at', 'desc')
                ->get();

            $datas = $pelamars->map(function ($pelamar) {
                return [
                    'id' => $pelamar->id,
                    'nama_lengkap' => $pelamar->nama_lengkap,
                    'nama_panggilan' => $pelamar->nama_panggilan,
                    'no_telp' => $pelamar->no_telp,
                    'email' => $pelamar->email,
                    'password' => $pelamar->password,
                    'alamat' => $pelamar->alamat,
                    'lowongan' => $pelamar->lowongan->posisi->nama_posisi ?? 'Takde',
                ];
            });

            return response()->json([
                'success' => true,
                'data' => $datas
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve data: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departemen = Departemen::all();
        $posisi = Posisi::all();
        $lowongan = Lowongan::all();

        return view('admin.pelamar.create', compact('lowongan', 'departemen', 'posisi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate([
            'lowongan_id' => 'required|exists:lowongan,id',
            'nama_lengkap' => 'required|string',
            'nama_panggilan' => 'required|string',
            'jenis_kelamin' => 'required|in:0,1',
            'agama' => 'required|in:0,1,2,3,4,5',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'status_kawin' => 'required|in:0,1',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|password|min:8',
            // 'pendidikan' => 'required|array',
            // 'pengalaman' => 'required|array',
            // 'keterampilan' => 'required|array',
            // 'sertifikat' => 'required|array',
            // 'sertifikat_image.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
            'profile' => 'required|file|mimes:png,jpg,jpeg',
            'cv' => 'required|file|mimes:png,jpg,jpeg,pdf',
            'departemen_id' => 'nullable|exists:departemen,id',
            'posisi_id' => 'nullable|exists:posisi,id',
        ]);

        // dd($validatedData);

        $profilePath = null;
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('profiles', 'public');
        }

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        }

        // $sertifikatImage = [];
        // if ($request->hasFile('sertifikat_image')) {
        //     foreach ($request->file('sertifikat_image') as $image) {
        //         $sertifikatImage[] = $image->store('sertifikat_image', 'public');
        //     }
        // }

        $pelamar = Pelamar::create([
            'lowongan_id' => $validatedData['lowongan_id'],
            // 'departemen_id' => $validatedData['departemen_id'],
            // 'posisi_id' => $validatedData['posisi_id'],
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'nama_panggilan' => $validatedData['nama_panggilan'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'agama' => $validatedData['agama'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'tgl_lahir' => $validatedData['tgl_lahir'],
            'status_kawin' => $validatedData['status_kawin'],
            'alamat' => $validatedData['alamat'],
            'no_telp' => $validatedData['no_telp'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            // 'pendidikan' => json_encode($validatedData['pendidikan']),
            // 'pengalaman' => json_encode($validatedData['pengalaman']),
            // 'keterampilan' => json_encode($validatedData['keterampilan']),
            // 'sertifikat' => json_encode($validatedData['sertifikat']),
            // 'sertifikat_image' => json_encode($sertifikatImage),
            'profile' => $profilePath,
            'cv' => $cvPath,
        ]);

        return redirect()->route('pelamar.index')->with('success', 'Pelamar berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        // $pelamar = Pelamar::find($id);
        // $pelamar = Pelamar::all();
        // dd($pelamar);
        $departemen = Departemen::all();
        $posisi = Posisi::all();
        $lowongan = Lowongan::all();
        $sertifikats = Sertifikat::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();
        $pendidikans = Pendidikan::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();
        $pengalamans = Pengalaman::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();
        $keterampilans = Keterampilan::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();
        $files = Files::where('id_pelamar', $pelamar->id)
            ->with('pelamar')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.pelamar.detail', compact('pelamar', 'lowongan', 'departemen', 'posisi', 'sertifikats', 'pendidikans', 'pengalamans', 'keterampilans', 'files'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelamar $pelamar)
    {
        $departemen = Departemen::all();
        $posisi = Posisi::all();
        $lowongan = Lowongan::all();

        return view('pelamar.index', compact('pelamar', 'lowongan', 'departemen', 'posisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'lowongan_id' => 'required|exists:lowongan,id',
            'nama_lengkap' => 'required|string',
            'nama_panggilan' => 'required|string',
            'jenis_kelamin' => 'required|in:0,1',
            'agama' => 'required|in:0,1,2,3,4,5',
            'tempat_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'status_kawin' => 'required|in:0,1',
            'alamat' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|password|min:8',
            // 'pendidikan' => 'required|array',
            // 'pengalaman' => 'required|array',
            // 'keterampilan' => 'required|array',
            // 'sertifikat' => 'required|array',
            // 'sertifikat_image.*' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
            'profile' => 'nullable|file|mimes:png,jpg,jpeg',
            'cv' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
            'departemen_id' => 'nullable|exists:departemen,id',
            'posisi_id' => 'nullable|exists:posisi,id',
        ]);

        if ($request->hasFile('profile')) {
            if ($pelamar->profile) {
                Storage::disk('public')->delete($pelamar->profile);

                $folderPF = dirname($pelamar->profile);
            } else {
                $folderPF = '/profiles';
            }

            $profilePath = $request->file('profile')->store($folderPF, 'public');
            $validatedData['profile'] = $profilePath;
        } else {
            unset($validatedData['profile']);
        }

        if ($request->hasFile('cv')) {
            if ($pelamar->cv) {
                Storage::disk('public')->delete($pelamar->cv);

                $folderCV = dirname($pelamar->cv);
            } else {
                $folderCV = '/cvs';
            }

            $cvPath = $request->file('cv')->store($folderCV, 'public');
            $validatedData['cv'] = $cvPath;
        } else {
            unset($validatedData['cv']);
        }

        // $sertifikatImage = [];
        // if ($request->hasFile('sertifikat_image')) {
        //     if ($pelamar->sertifikat_image) {
        //         foreach (json_decode($pelamar->sertifikat_image) as $image) {
        //             if (Storage::disk('public')->exists($image)) {
        //                 Storage::disk('public')->delete($image);
        //             }
        //         }
        //     }
        //     foreach ($request->file('sertifikat_image') as $image) {
        //         $sertifikatImage[] = $image->store('sertifikat_image', 'public');
        //     }
        //     $validatedData['sertifikat_image'] = json_encode($sertifikatImage);
        // }

        // $existingSertifikat = json_decode($pelamar->sertifikat, true) ?? [];
        // $existingSertifikatImages = json_decode($pelamar->sertifikat_image, true) ?? [];

        // $newSertifikat = $request->input('sertifikat', []);
        // $newSertifikatImages = $request->input('sertifikat_image', []);

        // foreach ($newSertifikat as $index => $sertifikat) {
        //     if (!empty($sertifikat)) {
        //         $existingSertifikat[] = $sertifikat;

        //         if (isset($newSertifikatImages[$index])) {
        //             // $file = $newSertifikatImages[$index];
        //             $filePath = $newSertifikatImages[$index]->store('sertifikat_image', 'public');
        //             $existingSertifikatImages[] = $filePath;
        //         } else {
        //             $existingSertifikatImages[] = $existingSertifikatImages[$index] ?? null;
        //         }
        //     }
        // }

        $pelamar->update([
            'lowongan_id' => $validatedData['lowongan_id'],
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'nama_panggilan' => $validatedData['nama_panggilan'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'agama' => $validatedData['agama'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'tgl_lahir' => $validatedData['tgl_lahir'],
            'status_kawin' => $validatedData['status_kawin'],
            'alamat' => $validatedData['alamat'],
            'no_telp' => $validatedData['no_telp'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            // 'pendidikan' => json_encode($validatedData['pendidikan']),
            // 'pengalaman' => json_encode($validatedData['pengalaman']),
            // 'keterampilan' => json_encode($validatedData['keterampilan']),
            // 'sertifikat' => json_encode($validatedData['sertifikat']),
            // 'sertifikat_image' => $validatedData['sertifikat_image'] ?? $pelamar->sertifikat_image,
            'profile' => $validatedData['profile'] ?? $pelamar->profile,
            'cv' => $validatedData['cv'] ?? $pelamar->cv,
        ]);

        return redirect()->route('pelamar.index')->with('success', 'Pelamar berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar)
    {
        if ($pelamar->profile) {
            Storage::disk('public')->delete($pelamar->profile);
        }

        if ($pelamar->cv) {
            Storage::disk('public')->delete($pelamar->cv);
        }

        // if ($pelamar->sertifikat_image) {
        //     foreach (json_decode($pelamar->sertifikat_image) as $image) {
        //         if (Storage::disk('public')->exists($image)) {
        //             Storage::disk('public')->delete($image);
        //         }
        //     }
        // }

        $pelamar->delete();

        return redirect()->route('pelamar.index')->with('success', 'Pelamar berhasil dihapus!');
    }
}
