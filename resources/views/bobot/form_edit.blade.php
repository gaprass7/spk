@extends('template.index')
@section('content')
@php
$ar_kriteria = App\Models\Kriteria::all();
@endphp

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Keterangan</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bobot.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-1">
                    <div class="col-sm-12 mb-4">
                        <select class="form-control" name="kriteria_id">
                            <option selected>-- Pilih Kriteria --</option>
                            @foreach($ar_kriteria as $kri)
                            @php
                            $sel = ($kri->id == $row->kriteria_id) ? 'selected' : '' ;
                            @endphp
                            <option value="{{ $kri->id }}" {{$sel}}>{{ $kri->kriteria }}</option>
                            {{-- <option value="{{ $kri->id }}">{{ $kri->kriteria }}</option> --}}
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <input type="text" placeholder="bobot" class="form-control @error('bobot') is-invalid @enderror"
                            name="bobot" value="{{ $row->bobot }}">
                        @error('bobot')
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

@include('bobot.data')

@endsection