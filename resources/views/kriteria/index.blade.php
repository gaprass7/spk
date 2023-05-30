@extends('template.index')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Kode</th>
                        <th>Kriteria</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach($kriteria as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->kode }}</td>
                            <td>{{ $row->kriteria }}</td>
                            <td>{{ $row->keterangan->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection