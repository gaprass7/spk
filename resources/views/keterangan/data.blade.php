<div class="col-md-8">
    @include('template.alertsukses')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Tabel Keterangan</h4>
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
                            <td>
                                <form method="POST" id="formDelete" action="{{ route('keterangan.destroy',$row->id) }}">
                                
                                    @csrf
                                    @method('DELETE')

                                    <a class="btn btn-warning btn-sm" title="Ubah Keterangan" href=" {{ route('keterangan.edit',$row->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                
                                    <button type="submit" onclick="return confirm('Anda Yakin Ingin Mengahapus ?')" class="btn btn-danger btn-sm btnDelete" title="Hapus Keterangan">
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