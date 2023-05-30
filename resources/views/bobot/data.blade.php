<div class="col-md-8">
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
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>