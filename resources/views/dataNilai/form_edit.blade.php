@extends('template.index')
@section('content')

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Keterangan</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('dataNilai.update',$row->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nama" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" value="{{ $row->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nilai C1"
                            class="form-control @error('nilai1') is-invalid @enderror" name="nilai1"
                            value="{{ $row->nilai1 }}">
                        @error('nilai1')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nilai C2"
                            class="form-control @error('nilai2') is-invalid @enderror" name="nilai2"
                            value="{{ $row->nilai2 }}">
                        @error('nilai2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nilai C3"
                            class="form-control @error('nilai3') is-invalid @enderror" name="nilai3"
                            value="{{ $row->nilai3 }}">
                        @error('nilai3')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nilai C4"
                            class="form-control @error('nilai4') is-invalid @enderror" name="nilai4"
                            value="{{ $row->nilai4 }}">
                        @error('nilai4')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Nilai C5"
                            class="form-control @error('nilai5') is-invalid @enderror" name="nilai5"
                            value="{{ $row->nilai5 }}">
                        @error('nilai5')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>


                <div class="text-center">
                    <button class="btn btn-secondary"><a style="color:white;" title="Batal"
                            href="{{ url('') }}">Batal</a></button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('dataNilai.data')
@endsection