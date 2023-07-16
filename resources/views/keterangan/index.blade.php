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
                            href="{{ url('keterangan') }}">Batal</a></button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('keterangan.data')

@endsection