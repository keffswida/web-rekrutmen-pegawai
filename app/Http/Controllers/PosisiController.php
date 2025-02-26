<?php

namespace App\Http\Controllers;

use App\Models\Posisi;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posisis = Posisi::all();
        $posisis = Posisi::all();
        $departemen = Departemen::where('status', '=', '0')->get();
        // $departemen = Departemen::all();
        // dd($departemen);

        return view('admin.master.posisi.posisi', compact('posisis', 'departemen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departemen = Departemen::all();

        return view('admin.master.posisi.posisi', compact('departemen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_posisi' => 'required|string|max:255',
            'departemen_id' => 'required|exists:departemen,id',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Posisi::create($request->all());


        return redirect()->route('posisi.index')->with('success', 'Posisi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posisi $posisi)
    {
        return view('posisi.show', compact('posisi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posisi $posisi)
    {
        $departemen = Departemen::all();

        return view('posisi.index', compact('posisi', 'departemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posisi $posisi)
    {
        $validator = Validator::make($request->all(), [
            'nama_posisi' => 'required|string|max:255',
            'departemen_id' => 'required|exists:departemen,id',
            'deskripsi' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $posisi->update($request->all());

        return redirect()->route('posisi.index')->with('success', 'Posisi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posisi $posisi)
    {
        $posisi->delete();

        return redirect()->route('posisi.index')->with('success', 'Posisi berhasil dihapus!');
    }
}
