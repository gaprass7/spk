@extends('template.index')
@section('content')

<form class="row g-3" method="POST" action="{{ route('keterangan.update',$row->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-6">
        <label for="inputNane4" class="form-label">Keterangan</label>
        <input type="text" class="form-control" name="keterangan" value="{{ $row->keterangan }}" placeholder="Keterangan">
    </div>
    

    <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
        <button type="submit" class="btn btn-success" style="margin-right: 10px;">Simpan</button>
        <button type="reset" class="btn btn-dark" style="margin-right: 10px;">Batal</button>
    </div>

</form>

@endsection