@extends('template.index')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Tabel Ranking Nilai Santri</h4>
        </div>
        <div class="mt-8" style="width:550px; margin-left:10px;">
            <a class="btn btn-sm" title="Tambah Data Nilai Baru" style="background-color: blue; color: white;"
                href="{{ route('dataNilai.index') }}">
                <i class="bi bi-plus-circle-fill"> Add Nilai</i>
            </a>
            <a class="btn btn-danger btn-sm" title="Export to PDF Hasil Perangkingan" href=" {{ url('/generate-pdf') }}">
                <i class="bi bi-file-earmark-pdf-fill"> Export to PDF</i>
            </a>
            <a class="btn btn-success btn-sm" title="Export to Excel Hasil Perangkingan" href="#">
                <i class="bi bi-file-excel"> Export to Excel</i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid black; text-align: center;" <th>
                        </th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($dataNilai as $row)
                        <tr
                            style="background-color: {{ ($no <= 50) ? 'rgba(0, 128, 0, 0.1)' : 'rgba(255, 0, 0, 0.1)' }}; }}; text-align: center; vertical-align: middle;">
                            <td>{{ $no++ }}</td>
                            <td style="text-align: left;">{{ $row->nama }}</td>
                            <td>{{ $row->nilai1 }}</td>
                            <td>{{ $row->nilai2 }}</td>
                            <td>{{ $row->nilai3 }}</td>
                            <td>{{ $row->nilai4 }}</td>
                            <td>{{ $row->nilai5 }}</td>
                            <td>{{ $row->total }}</td>
                            <td>
                                <span style="display: inline-block; width: 100%;">
                                    {{ ($no <= 51) ? 'Diterima' : 'Belum diterima' }} </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection