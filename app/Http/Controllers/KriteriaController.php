<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan seluruh data 
        $kriteria = Kriteria::all();

        return view('kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'kode' => 'Required|string|max:3',
                'kriteria' => 'Required|string|max:250',
                'keterangan_id' => 'Required'
            ],
            [
                'kode.required' => 'Kode Wajib Diisi',
                'kode.max' => 'kode Maxsimal 3 karakter',
                'kriteria.max' => 'Kriteria Wajib Diisi',
                'kriteria.max' => 'Kriteria Maxsimal 250 karakter',
                'keterangan_id.required' => 'Keterangan Wajib Diisi',
            ]
        );
        //lakukan insert data dari request form
        DB::table('kriteria')->insert(
            [
                'kode' => $request->kode,
                'kriteria' => $request->kriteria,
                'keterangan_id' => $request->keterangan_id,
                'created_at' => now(),
            ]
        );

        return redirect()->route('kriteria.index')
                        ->with('sucsess', 'Berhasil ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kriteria::where('id', $id)->delete();
        return redirect()->route('kriteria.index')
                        ->with('sucsess', 'Data Kriteria Berhasil DiHapus');
    }
}
