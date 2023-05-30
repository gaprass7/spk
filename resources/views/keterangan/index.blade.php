@extends('template.index')
@section('content')
<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Keterangan</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('keterangan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                            name="keterangan" value="{{ old('keterangan') }}">
                        @error('keterangan')
                        <div class="invalid-feedback"> {{-- invalid-feedback komponen dari bootstrab --}}
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div><br>
                <div class="text-center">
                    <button class="btn btn-secondary"><a style="color:white;" title="Batal"
                            href="{{ url('') }}">Batal</a></button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>aksi</th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($keterangan as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td width="15%">
                                <form method="POST" id="formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-dark btn-sm" title="Detail Menu" href=" {{ route('keterangan.show',$row->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    &nbsp;
                                    
                                    <a class="btn btn-warning btn-sm" title="Ubah Menu" href=" {{ route('keterangan.edit',$row->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    &nbsp;
                                    <button type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Menu"
                                        data-action="{{ route('keterangan.destroy',$row->id) }}">
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