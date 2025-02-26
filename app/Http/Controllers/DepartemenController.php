<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departemens = Departemen::all();
        return view('admin.master.departemen.departemen', compact('departemens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.departemen.departemen');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_departemen' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        Departemen::create($validated);

        return redirect()->route('departemen.index')->with('success', 'Berhasil menambah departemen!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departemen $departemen)
    {
        return view('departemen.show', compact('departemen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departemen $departemen)
    {
        return view('departemen.edit', compact('departemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departemen $departemen)
    {
        $validated = $request->validate([
            'nama_departemen' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        // dd($validated);
        $departemen->update($validated);

        return redirect()->route('departemen.index')->with('success', 'Berhasil memperbarui departemen!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departemen $departemen)
    {
        $departemen->delete();

        return redirect()->route('departemen.index')->with('success', 'Berhasil menghapus departemen!');
    }
}
