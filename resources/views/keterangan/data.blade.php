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
                            <td>
                                <form method="POST" id="formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-dark btn-sm" title="Detail Menu"
                                        href=" {{ route('keterangan.show',$row->id) }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    

                                    <a class="btn btn-warning btn-sm" title="Ubah Menu"
                                        href=" {{ route('keterangan.edit',$row->id) }}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    
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