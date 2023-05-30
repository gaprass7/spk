@include('dataNilai.index')
@section('section')

<div class="card-header">
    <h4 class="card-title"> Add Nilai Santri</h4>
</div>
<div class="card-body">
    <form method="POST" action="{{ route('dataNilai.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" placeholder="Nama" class="form-control @error('nama') is-invalid @enderror"
                    name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" placeholder="Nilai C1" class="form-control @error('nilai1') is-invalid @enderror"
                    name="nilai1" value="{{ old('nilai1') }}">
                @error('nilai1')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" placeholder="Nilai C2" class="form-control @error('nilai2') is-invalid @enderror"
                    name="nilai2" value="{{ old('nilai2') }}">
                @error('nilai2')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" placeholder="Nilai C3" class="form-control @error('nilai3') is-invalid @enderror"
                    name="nilai3" value="{{ old('nilai3') }}">
                @error('nilai3')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <input type="text" placeholder="Nilai C4" class="form-control @error('nilai4') is-invalid @enderror"
                    name="nilai4" value="{{ old('nilai4') }}">
                @error('nilai4')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12">
                <input type="text" placeholder="Nilai C5" class="form-control @error('nilai5') is-invalid @enderror"
                    name="nilai5" value="{{ old('nilai5') }}">
                @error('nilai5')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <!-- Lanjutkan untuk field nilai lainnya -->
        <!-- ... -->
        <div class="text-center">
            <button class="btn btn-secondary"><a style="color:white;" title="Batal"
                    href="{{ url('') }}">Batal</a></button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

@endsection