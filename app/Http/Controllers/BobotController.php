<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan seluruh data 
        $bobot = Bobot::all();

        return view('bobot.index', compact('bobot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $ar_kriteria = Kriteria::all();

        return view('bobot.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'bobot' => 'Required|string|max:15',
                'kriteria_id' => 'Required'
            ],
            [
                'bobot.required' => 'Bobot Wajib Diisi',
                'kriteria_id.required' => 'Kriteria Wajib Diisi',
            ]
        );
        //lakukan insert data dari request form
        DB::table('bobot')->insert(
            [
                'bobot' => $request->bobot,
                'kriteria_id' => $request->kriteria_id,
                'created_at' => now(),
            ]
        );

        return redirect()->route('bobot.index')
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
        $row = Bobot::find($id);
        $bobot = Bobot::all();

        return view('bobot.form_edit', compact('row', 'bobot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'bobot' => 'Required|string|max:15',
                'kriteria_id' => 'Required'
            ],
            [
                'bobot.required' => 'Bobot Wajib Diisi',
                'kriteria_id.required' => 'Kriteria Wajib Diisi',
            ]
        );
        //lakukan insert data dari request form
        DB::table('bobot')->where('id', $id)->update(
            [
                'bobot' => $request->bobot,
                'kriteria_id' => $request->kriteria_id,
                'updated_at' => now(),
            ]
        );

        return redirect()->route('bobot.index')
        ->with('sucsess', 'Berhasil diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
