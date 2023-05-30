<?php

namespace App\Http\Controllers;

use App\Models\DataNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan seluruh data 
        $dataNilai = DataNilai::all();

        return view('dataNilai.index', compact('dataNilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataNilai = DataNilai::all();
        return view('dataNilai.index', compact('dataNilai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses input data
        $request->validate(
            [
                'nama' => 'Required|unique:dataNilai|max:100',
                'nilai1' => 'Required',
                'nilai2' => 'Required',
                'nilai3' => 'Required',
                'nilai4' => 'Required',
                'nilai5' => 'Required',
            ],
            [
                // Custom validasi (pesan error) berbahasa indonesia
                'nama.required' => 'Nama Wajib Diisi',
                'nama.unique' => 'Nama Sudah Ada',
                'nama.max' => 'Nama Maxsimal 100 Karakter',
                'nilai1.required' => 'Nilai Wajib Diisi',
                'nilai2.required' => 'Nilai Wajib Diisi',
                'nilai3.required' => 'Nilai Wajib Diisi',
                'nilai4.required' => 'Nilai Wajib Diisi',
                'nilai5.required' => 'Nilai Wajib Diisi'
            ]
        );

        //lakukan insert data dari request form
        DB::table('dataNilai')->insert(
            [
                'nama' => $request->nama,
                'nilai1' => $request->nilai1,
                'nilai2' => $request->nilai2,
                'nilai3' => $request->nilai3,
                'nilai4' => $request->nilai4,
                'nilai5' => $request->nilai5,
                'created_at' => now(),
            ]
        );

        return redirect()->route('dataNilai.index')
            ->with('sucsess', 'Data Mitrans Berhasil Disimpan');
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
        $dataNilai = DataNilai::all();
        $row = DataNilai::find($id);
        return view('DataNilai.form_edit', compact('dataNilai','row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'Required|unique:dataNilai|max:100',
                'nilai1' => 'Required',
                'nilai2' => 'Required',
                'nilai3' => 'Required',
                'nilai4' => 'Required',
                'nilai5' => 'Required',
            // ],
            // [
            //     // Custom validasi (pesan error) berbahasa indonesia
            //     'nama.required' => 'Nama Wajib Diisi',
            //     'nama.unique' => 'Nama Sudah Ada',
            //     'nama.max' => 'Nama Maxsimal 100 Karakter',
            //     'nilai1.required' => 'Nilai Wajib Diisi',
            //     'nilai2.required' => 'Nilai Wajib Diisi',
            //     'nilai3.required' => 'Nilai Wajib Diisi',
            //     'nilai4.required' => 'Nilai Wajib Diisi',
            //     'nilai5.required' => 'Nilai Wajib Diisi'
            ]
        );

        //lakukan insert data dari request form
        DB::table('dataNilai')->where('id', $id)->update(
            [
                'nama' => $request->nama,
                'nilai1' => $request->nilai1,
                'nilai2' => $request->nilai2,
                'nilai3' => $request->nilai3,
                'nilai4' => $request->nilai4,
                'nilai5' => $request->nilai5,
                'updated_at' => now(),
            ]
        );

        return redirect()->route('dataNilai.index')
                        ->with('sucsess', 'Data Nilai Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}