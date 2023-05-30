@extends('template.index')
@section('content')

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Edit Keterangan</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('keterangan.update',$row->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <input type="text" placeholder="Keterangan" class="form-control" name="keterangan"
                            value="{{ $row->keterangan }}" placeholder="Keterangan">
                    </div>
                </div><br>

                <div class="text-center">
                    <button type="reset" class="btn btn-dark" style="margin-right: 10px;">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('keterangan.data')

@endsection