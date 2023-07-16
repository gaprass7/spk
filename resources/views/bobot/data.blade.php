<div class="col-md-8">
    @include('template.alertsukses')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Tabel Bobot</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach($bobot as $row)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->kriteria->kriteria }}</td>
                            <td>{{ $row->bobot }}</td>
                            <td>
                                <form method="POST" id="formDelete" action="{{ route('bobot.destroy',$row->id) }}">
                            
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-warning btn-sm" title="Ubah Bobot" href=" {{ route('bobot.edit',$row->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                            
                                    <button type="submit" onclick="return confirm('Anda Yakin Ingin Mengahapus ?')" class="btn btn-danger btn-sm btnDelete" title="Hapus Bobot">
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