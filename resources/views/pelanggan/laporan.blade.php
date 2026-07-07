<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Pelanggan</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
            font-size:14px;
        }

        .header{
            text-align:center;
            line-height:8px;
        }

        .header h2{
            margin-bottom:20px;
        }

        hr{
            border:1px solid black;
            margin-top:20px;
            margin-bottom:15px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th{
            background:#e9ecef;
            padding:8px;
            text-align:center;
        }

        td{
            padding:8px;
            text-align:center;
        }

        .ttd{
            width:100%;
            margin-top:70px;
        }

        .kanan{
            float:right;
            text-align:center;
            width:250px;
        }
    </style>

</head>

<body onload="window.print()">

<div class="header">
    <h2>WASH LAUNDRY</h2>

    <p>Email : wash.laundry@gmail.com</p>

    <p>Telepon / WhatsApp : +62 812-3456-7890</p>

    <p>Alamat : Jl. Melati No.25, Jambi</p>

    <br>

    <h3>LAPORAN DATA PELANGGAN</h3>
</div>

<hr>

<table>
    <thead>
        <tr>
            <th width="50">No</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
    </thead>

    <tbody>
        @foreach($pelanggan as $no => $p)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $p->nama_pelanggan }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->no_hp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="ttd">
    <div class="kanan">
        <p>Jambi, {{ date('d-m-Y') }}</p>

        <br><br><br>

        <p>Pemilik Wash Laundry</p>

        <br><br><br>

        <p>(_______________)</p>
    </div>
</div>

</body>
</html>