<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Pembayaran</title>

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

    <h3>LAPORAN DATA PEMBAYARAN</h3>

</div>

<hr>

<table>

    <thead>
        <tr>
            <th width="50">No</th>
            <th>ID Laundry</th>
            <th>Total Tagihan</th>
            <th>Jumlah Bayar</th>
            <th>Kembalian</th>
            <th>Metode</th>
            <th>Status</th>
            <th>Tanggal Bayar</th>
        </tr>
    </thead>

    <tbody>

    @php
        $totalPembayaran = 0;
    @endphp

    @foreach($pembayaran as $key => $row)

    @php
        $totalPembayaran += $row->jumlah_bayar;
    @endphp

    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $row->laundry_id }}</td>
        <td>Rp {{ number_format($row->total_tagihan,0,',','.') }}</td>
        <td>Rp {{ number_format($row->jumlah_bayar,0,',','.') }}</td>
        <td>Rp {{ number_format($row->kembalian,0,',','.') }}</td>
        <td>{{ $row->metode_pembayaran }}</td>
        <td>{{ $row->status_pembayaran }}</td>
        <td>{{ $row->tanggal_bayar }}</td>
    </tr>

    @endforeach

    <tr>
        <td colspan="3" style="text-align:center; font-weight:bold;">
            Total Pembayaran
        </td>
        <td style="font-weight:bold;">
            Rp {{ number_format($totalPembayaran,0,',','.') }}
        </td>
        <td colspan="4"></td>
    </tr>

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