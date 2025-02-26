<?php

namespace App\Http\Controllers;

use App\Models\UserAdm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $useradms = UserAdm::all();
        return view('admin.master.useradm.useradm', compact('useradms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master.useradm.useradm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:useradm',
            'password' => 'required|min:8|max:255',
            'hak_akses' => 'required|in:super_admin,admin',
            'status' => 'required|in:0,1',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        UserAdm::create($validated);

        return redirect()->route('useradm.index')->with('success', 'User Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAdm $useradm)
    {
        return view('useradm.show', compact('useradm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserAdm $useradm)
    {
        return view('useradm.edit', compact('useradm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserAdm $useradm)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            // 'email' => 'required|email|unique:useradm',
            'email' => ['required', 'email', Rule::unique('useradm')->ignore($useradm->id)],
            'password' => 'required|min:8|max:255',
            'hak_akses' => 'required|in:super_admin,admin',
            'status' => 'required|in:0,1',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }

        $useradm->update($validated);

        return redirect()->route('useradm.index')->with('success', 'User Admin berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserAdm $useradm)
    {

        try {
            $useradm->delete();
            return redirect()->route('useradm.index')->with('success', 'Berhasil menghapus user admin!');
        } catch (\Exception $e) {
            return redirect()->route('useradm.index')->with('error', 'Gagal menghapus user admin!');
        }

        // $useradm->delete();

        // return redirect()->route('useradm.index')->with('success', 'User Admin berhasil dihapus!');
    }
}
