<!-- hasilPDF.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #aca9a9;
        }
        
        .table-header {
            background-color: #f2f2f2;
        }
        
        .success-row {
            background-color: #d4edda;
        }
        
        .danger-row {
            background-color: #f8d7da;
        }
        
        .badge {
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 5px;
        }
        
        .success-badge {
            background-color: #28a745;
            color: #fff;
        }
        
        .danger-badge {
            background-color: #dc3545;
            color: #fff;
        }
        
        /* Header */
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }
        
        .header-logo {
            width: 150px;
            height: auto;
            margin-bottom: 10px;
        }
        
        .header-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .header-subtitle {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="header-logo" src="{{ public_path('images/logo.png') }}" alt="Logo">
        <h1 class="header-title">Tabel Ranking Nilai Santri</h1>
        <h2 class="header-subtitle">Semester 1, Tahun Ajaran 2023/2024</h2>
    </div>
    <table>
        <thead class="table-header">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($dataNilai as $row)
            <tr class="{{ ($no <= 50) ? 'success-row' : 'danger-row' }}">
                <td>{{ $no++ }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->nilai1 }}</td>
                <td>{{ $row->nilai2 }}</td>
                <td>{{ $row->nilai3 }}</td>
                <td>{{ $row->nilai4 }}</td>
                <td>{{ $row->nilai5 }}</td>
                <td>{{ $row->total }}</td>
                <td>
                    <span class="badge {{ ($no <= 51) ? 'success-badge' : 'danger-badge' }}">
                        {{ ($no <= 51) ? 'Diterima' : 'Gagal' }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>