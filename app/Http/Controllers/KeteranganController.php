<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan seluruh data 
        $keterangan = Keterangan::all();

        return view('keterangan.index', compact('keterangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keterangan.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'keterangan' => 'Required|unique:keterangan|max:25',
            ],
            [
                // Custom validasi (pesan error) berbahasa indonesia
                'keterangan.required' => 'Keterangan Wajib Diisi',
                'keterangan.unique' => 'Keterangan Sudah Tersedia',
                'keterangan.max' => 'Keterangan Max 25 Karakter',
            ]
        );

        DB::table('keterangan')->insert(
            [
                'keterangan' => $request->keterangan,
                'created_at' => now(),
            ]
        );

        return redirect()->route('keterangan.index')
            ->with('sucsess', 'Keterangan Berhasil Disimpan');
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
        $row = Keterangan::find($id);
        $keterangan = Keterangan::all();
        return view('Keterangan.form_edit', compact('row','keterangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
                'keterangan' => 'Required|unique:keterangan|max:25',
        ]);
        DB::table('keterangan')->where('id',$id)->update(
            [
                'keterangan' => $request->keterangan,
                'updated_at' => now(),
            ]);

        return redirect()->route('keterangan.index')
        ->with('success', 'Data Menu Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Keterangan::where('id', $id)->delete();
        return redirect()->route('keterangan.index')
                        ->with('sucsess', 'Data Mitrans Berhasil DiHapus');
    }
}
