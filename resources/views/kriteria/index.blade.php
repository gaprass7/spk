@extends('template.index')
@section('content')
@php
$ar_keterangan = App\Models\Keterangan::all();
@endphp

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Kriteria</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('kriteria.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <input type="text" placeholder="kode" class="form-control @error('kode') is-invalid @enderror"
                            name="kode" value="{{ old('kode') }}">
                        @error('kode')
                        <div class="invalid-feedback"> {{-- invalid-feedback komponen dari bootstrab --}}
                            {{ $message }}
                        </div>
                        @enderror
                    </div><br><br><br>
                    <div class="col-sm-12">
                        <input type="text" placeholder="kriteria" class="form-control @error('kriteria') is-invalid @enderror" name="kriteria"
                            value="{{ old('kriteria') }}">
                        @error('kriteria')
                        <div class="invalid-feedback"> {{-- invalid-feedback komponen dari bootstrab --}}
                            {{ $message }}
                        </div>
                        @enderror
                    </div><br><br><br>
                    <div class="col-sm-12 mb-4">
                        <select class="form-control" name="keterangan_id">
                            <option selected>-- Pilih Keterangan --</option>
                            @foreach($ar_keterangan as $ket)
                            <option value="{{ $ket->id }}">{{ $ket->keterangan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-secondary"><a style="color:white;" title="Batal"
                            href="{{ url('kriteria') }}">Batal</a></button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('kriteria.data')

@endsection