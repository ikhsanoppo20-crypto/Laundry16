<!DOCTYPE html><html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Laundry</title><style>
    body{
        font-family: Arial, sans-serif;
        margin:40px;
    }

    .header{
        text-align:center;
    }

    .header h2{
        margin:0;
    }

    .header p{
        margin:3px;
    }

    hr{
        border:1px solid black;
        margin-top:10px;
        margin-bottom:20px;
    }

    table{
        width:100%;
        border-collapse:collapse;
    }

    table, th, td{
        border:1px solid black;
    }

    th{
        background-color:#f2f2f2;
    }

    th, td{
        padding:8px;
        text-align:center;
    }

    .footer{
        margin-top:50px;
        width:250px;
        float:right;
        text-align:center;
    }
</style>

</head><body onload="window.print()"><div class="header">
    <h2>WASH LAUNDRY</h2>

    <p>Email : wash.laundry@gmail.com</p>
    <p>Telepon / WhatsApp : +62 812-3456-7890</p>
    <p>Alamat : Jl. Melati No. 25, Jambi</p>

    <h3>LAPORAN DATA LAUNDRY</h3>
</div>

<hr>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Berat</th>
            <th>Harga/Kg</th>
            <th>Total Harga</th>
            <th>Status</th>
            <th>Tanggal Masuk</th>
        </tr>
    </thead>

    <tbody>

        @php
            $totalPendapatan = 0;
        @endphp

        @foreach($laundry as $no => $row)

        @php
            $totalPendapatan += $row->total_harga;
        @endphp

        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $row->pelanggan->nama_pelanggan }}</td>
            <td>{{ $row->berat }} Kg</td>
            <td>Rp {{ number_format($row->harga_per_kg,0,',','.') }}</td>
            <td>Rp {{ number_format($row->total_harga,0,',','.') }}</td>
            <td>{{ $row->status }}</td>
            <td>{{ $row->tanggal_masuk }}</td>
        </tr>

        @endforeach

        <tr>
            <td colspan="4">
                <b>Total Pendapatan</b>
            </td>

            <td colspan="3">
                <b>
                    Rp {{ number_format($totalPendapatan,0,',','.') }}
                </b>
            </td>
        </tr>

    </tbody>
</table>

<div class="footer">
    <p>Jambi, {{ date('d-m-Y') }}</p>

    <br><br><br>

    <p><strong>Pemilik Wash Laundry</strong></p>

    <br><br><br>

    <p>(___________________)</p>
</div>

</body>
</html>