<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\DataNilai;
use App\Models\Hasil;
use App\Models\Keterangan;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan seluruh data 
        $dataNilai = DataNilai::all();
        $bobot = Bobot::all();

        // Ambil nilai maksimum atau minimum untuk setiap kriteria
        $max_nilai1 = $dataNilai->max('nilai1');
        $max_nilai2 = $dataNilai->max('nilai2');
        $max_nilai3 = $dataNilai->max('nilai3');
        $max_nilai4 = $dataNilai->max('nilai4');
        $max_nilai5 = $dataNilai->max('nilai5');

        // Lakukan normalisasi menggunakan min-max normalization
        $dataNilai->transform(function ($item) use ($bobot, $max_nilai1, $max_nilai2, $max_nilai3, $max_nilai4, $max_nilai5) {
            $item->nilai1 = number_format(($item->nilai1) / ($max_nilai1), 2);
            $item->nilai2 = number_format(($item->nilai2) / ($max_nilai2), 2);
            $item->nilai3 = number_format(($item->nilai3) / ($max_nilai3), 2);
            $item->nilai4 = number_format(($item->nilai4) / ($max_nilai4), 2);
            $item->nilai5 = number_format(($item->nilai5) / ($max_nilai5), 2);
            $item->total = ($item->nilai1 * $bobot[0]->bobot) + ($item->nilai2 * $bobot[1]->bobot) + ($item->nilai3 * $bobot[2]->bobot) + ($item->nilai4 * $bobot[3]->bobot) + ($item->nilai5 * $bobot[4]->bobot);
            // $item->total = ($item->nilai1 * $bobot) + ($item->nilai2 * $bobot) + ($item->nilai3 * $bobot) + ($item->nilai4 * $bobot) + ($item->nilai5 * $bobot);
            return $item;
        });

        
        // untuk tess data nya ada atau tidakk
        // dd($dataNilai->toArray());

        return view('hasil.index', compact('dataNilai', 'max_nilai1', 'max_nilai2', 'max_nilai3', 'max_nilai4', 'max_nilai5'));
    }


    public function perengkingan()
    {
        // Mendapatkan data nilai dari model atau sumber data lainnya
        $dataNilai = DataNilai::all();
        $bobot = Bobot::all();

        
        
        // Mendapatkan bobot kriteria dari database
        $bobot_nilai1 = Bobot::where('kriteria', 'C1')->value('bobot');
        $bobot_nilai2 = Bobot::where('kriteria', 'C2')->value('bobot');
        $bobot_nilai3 = Bobot::where('kriteria', 'C3')->value('bobot');
        $bobot_nilai4 = Bobot::where('kriteria', 'C4')->value('bobot');
        $bobot_nilai5 = Bobot::where('kriteria', 'C5')->value('bobot');
        
        // Menghitung nilai terbobot
        $dataNilai->transform(function ($total) use ($bobot_nilai1, $bobot_nilai2, $bobot_nilai3, $bobot_nilai4, $bobot_nilai5) {
            $total->nilai_terbobot = ($total->nilai1 * $bobot_nilai1) + ($total->nilai2 * $bobot_nilai2) + ($total->nilai3 * $bobot_nilai3) + ($total->nilai4 * $bobot_nilai4) + ($total->nilai5 * $bobot_nilai5);
            
            return $total;
        });

        dd($dataNilai);
        
        return view('hasil.index', compact('dataNilai', 'total'));
    }
}


// Urutkan data berdasarkan nilai terbobot
// $dataNilai = $dataNilai->sortByDesc('nilai_terbobot');

// $bobot_nilai1 = 0.2;
// $bobot_nilai2 = 0.3;
// $bobot_nilai3 = 0.1;
// $bobot_nilai4 = 0.15;
// $bobot_nilai5 = 0.25;