<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\DataNilai;
use App\Models\Hasil;
use App\Models\Keterangan;
use App\Models\Kriteria;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataNilai = $this->getDataNilai();

        return view('hasil.index', compact('dataNilai'));
    }
    
    public function generatePDF()
    {
        $dataNilai = $this->getDataNilai();

        $pdf = FacadePdf::loadView('hasil.hasilPDF', compact('dataNilai'));
        return $pdf->download('HasilRankingSantri.pdf');
    }

    private function getDataNilai()
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
            $item->total = number_format(($item->nilai1 * $bobot[0]->bobot) + ($item->nilai2 * $bobot[1]->bobot) + ($item->nilai3 * $bobot[2]->bobot) + ($item->nilai4 * $bobot[3]->bobot) + ($item->nilai5 * $bobot[4]->bobot), 4);

            return $item;
        });

        
        $dataNilai = $dataNilai->sortByDesc('total');
        
        // untuk tess data nya ada atau tidakk
        // dd($dataNilai->toArray());
        return $dataNilai;

    }
}