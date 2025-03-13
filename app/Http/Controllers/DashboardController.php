<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPelamar = Pelamar::with('lowongan', 'posisi', 'departemen', 'user')->get();
        // dd($dataPelamar);
        return view('admin.dashboard.dashboard', compact('dataPelamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelamar = Pelamar::findOrFail($id);
        return view('admin.dashboard.dashboard', compact('pelamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id_pelamar' => 'required|exists:pelamar,id',
            'status_pelamaran' => 'required|in:0,1,2',
            'catatan' => 'nullable|string',
        ]);

        $pelamar = Pelamar::findOrFail($validated['id_pelamar']);
        $pelamar->status_pelamaran = $validated['status_pelamaran'];
        $pelamar->catatan = $validated['catatan'];
        $pelamar->save();

        return redirect()->back()->with('success', 'Status pelamar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
