@extends('template.index')
@section('content')

<div class="col-md-4">
    <div class="card">
        @yield('section')
    </div>
</div>
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="mt-8" style="width:550px; margin-left:10px;">
            <a class="btn btn-sm" title="Tambah Nasabah Baru" style="background-color: blue; color: white;"
                href="{{ route('dataNilai.index') }}">
                <i class="bi bi-plus-circle-fill"> Add Nilai</i>
            </a>
            <a class="btn btn-danger btn-sm" title="Export to PDF Menu" href=" {{ url('menu-pdf') }}">
                <i class="bi bi-file-earmark-pdf-fill"> Export to PDF</i>
            </a>
            <a class="btn btn-success btn-sm" title="Export to Excel Menu" href=" {{ url('menu-excel') }}">
                <i class="bi bi-file-excel"> Export to Excel</i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">

                        <th>No</th>
                        <th>Nama</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($dataNilai as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nilai1 }}</td>
                            <td>{{ $row->nilai2 }}</td>
                            <td>{{ $row->nilai3 }}</td>
                            <td>{{ $row->nilai4 }}</td>
                            <td>{{ $row->nilai5 }}</td>
                            <td>
                                <form method="POST" id="formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-dark btn-sm" title="Detail Menu" href=" {{ route('dataNilai.show',$row->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                
                            
                                    <a class="btn btn-warning btn-sm" title="Ubah Menu" href=" {{ route('dataNilai.edit',$row->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                
                                    <button type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Menu"
                                        data-action="{{ route('dataNilai.destroy',$row->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
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