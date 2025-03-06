<?php

namespace App\Http\Controllers\auth\user;

use App\Models\Files;
use App\Models\Pelamar;
use App\Models\Lowongan;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Sertifikat;
use App\Models\Keterampilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApplyController extends Controller
{
    // public function apply($slug, $uuid)
    // {
    //     // DB::enableQueryLog();
    //     $selectedLowongan = Lowongan::where('slug', $slug)->where('uuid', $uuid)->with('posisi')->first();

    //     // dd(DB::getQueryLog(), $slug, $uuid);
    //     // dd($slug, $uuid, Lowongan::pluck('uuid')->toArray());

    //     if (!$selectedLowongan) {
    //         return response()->json(['success' => false, 'message' => 'Lowongan tidak ditemukan.']);
    //     }

    //     $lowongans = Lowongan::select('id', 'posisi_id')->with('posisi')->get();
    //     $user = Auth::user();

    //     return view('user.auth.apply-lowongan', compact('lowongans', 'user', 'selectedLowongan'));
    // }

    public function apply($slug_uuid)
    {
        DB::enableQueryLog();

        // Menemukan UUID dalam string menggunakan regex
        if (preg_match('/([0-9a-fA-F-]{36})$/', $slug_uuid, $matches)) {
            $uuid = $matches[1]; // UUID ditemukan
            $slug = str_replace('-' . $uuid, '', $slug_uuid); // Menghapus UUID dari slug
        } else {
            return response()->json(['success' => false, 'message' => 'Format URL tidak valid.']);
        }

        // Debugging: Pastikan parsing slug dan uuid benar
        // dd($slug, $uuid, Lowongan::pluck('uuid')->toArray());

        // Mencari lowongan berdasarkan slug dan UUID
        $selectedLowongan = Lowongan::where('slug', $slug)->where('uuid', $uuid)->with('posisi')->first();

        if (!$selectedLowongan) {
            return response()->json(['success' => false, 'message' => 'Lowongan tidak ditemukan.']);
        }

        $lowongans = Lowongan::select('id', 'posisi_id')->with('posisi')->get();
        $user = Auth::user();

        return view('user.auth.apply-lowongan', compact('lowongans', 'user', 'selectedLowongan'));
    }


    public function processApply(Request $request)
    {
        try {
            Log::info('Received Data:', $request->all());
            $data = $request->all();

            $user = Auth::user();

            if (!$user) {
                return redirect()->route('login.index')->with('error', 'Login dahulu untuk melanjutkan');
            }

            if ($request->hasFile('profile')) {
                $profilePath = $request->file('profile')->store('profiles', 'public');
            } else {
                $profilePath = null;
            }
            if ($request->hasFile('cv')) {
                $cvPath = $request->file('cv')->store('cvs', 'public');
            } else {
                $cvPath = null;
            }

            $pelamar = $user->pelamar;

            $pelamar = Pelamar::create([
                'user_id' => $user->id,
                'lowongan_id' => $data['lowongan_id'],
                'nama_lengkap' => $user->nama_lengkap,
                'nama_panggilan' => $user->nama_panggilan,
                'jenis_kelamin' => $data['jenis_kelamin'],
                'agama' => $data['agama'],
                'tempat_lahir' => $data['tempat_lahir'],
                'tgl_lahir' => $data['tgl_lahir'],
                'status_kawin' => $data['status_kawin'],
                // 'email' => $data['email'],
                // 'password' => Hash::make($data['password']),
                'no_telp' => $data['no_telp'],
                'alamat' => $data['alamat'],
                'profile' => $profilePath,
                'cv' => $cvPath,
            ]);

            if ($request->has('pendidikan')) {
                foreach ($request->pendidikan as $pendidikan) {
                    Pendidikan::create([
                        'id_pelamar' => $pelamar->id,
                        'nama_institusi' => $pendidikan['nama_institusi'],
                        'jurusan' => $pendidikan['jurusan'],
                        'gelar' => $pendidikan['gelar'],
                        'tahun_masuk' => $pendidikan['tahun_masuk'],
                        'tahun_lulus' => $pendidikan['tahun_lulus'],
                        'deskripsi_sekolah' => $pendidikan['deskripsi_sekolah'],
                    ]);
                }
            }

            if ($request->has('pengalaman')) {
                foreach ($request->pengalaman as $pengalaman) {
                    Pengalaman::create([
                        'id_pelamar' => $pelamar->id,
                        'tempat_kerja' => $pengalaman['tempat_kerja'],
                        'posisi_kerja' => $pengalaman['posisi_kerja'],
                        'periode_kerja' => $pengalaman['periode_kerja'],
                        'deksripsi_kerja' => $pengalaman['deksripsi_kerja'],
                    ]);
                }
            }

            if ($request->has('keterampilan')) {
                foreach ($request->keterampilan as $keterampilan) {
                    Keterampilan::create([
                        'id_pelamar' => $pelamar->id,
                        'bidang_keterampilan' => $keterampilan['bidang_keterampilan'],
                        'keterampilan_terkait' => $keterampilan['keterampilan_terkait'],
                    ]);
                }
            }

            if ($request->hasFile('ijazah_terakhir')) {
                $ijazahPath = $request->file('ijazah_terakhir')->store('ijazah', 'public');
            } else {
                $ijazahPath = null;
            }
            if ($request->hasFile('transkrip_nilai')) {
                $transkripPath = $request->file('transkrip_nilai')->store('transkrip', 'public');
            } else {
                $transkripPath = null;
            }

            Files::create([
                'id_pelamar' => $pelamar->id,
                'ijazah_terakhir' => $ijazahPath,
                'transkrip_nilai' => $transkripPath,
            ]);

            if ($request->has('sertifikat')) {
                foreach ($request->sertifikat as $index => $sertifikat) {
                    if ($request->hasFile("sertifikat_image.$index")) {
                        $sertifikatPath = $request->file("sertifikat_image.$index")->store('sertifikat_image', 'public');
                    } else {
                        $sertifikatPath = null;
                    }

                    Sertifikat::create([
                        'id_pelamar' => $pelamar->id,
                        'sertifikat' => $sertifikat,
                        'sertifikat_image' => $sertifikatPath,
                    ]);
                }
            }

            return response()->json(['success' => true, 'message' => 'Registration Successfull!']);
        } catch (\Exception $e) {
            Log::error('Error in RegisterController: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
