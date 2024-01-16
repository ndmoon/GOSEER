<!DOCTYPE html>
<html>

<head>
    <title>Data Toko Stok Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Data Toko Stok Barang</h1>
    <table>
        <thead>
            <tr>
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Toko</th>
                <th class="py-2 px-4 border">Pemilik Toko</th>
                <th class="py-2 px-4 border">Barang</th>
                <th class="py-2 px-4 border">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tokoStokBarangs as $tokoStokBarang)
            <tr>
                <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 border">{{ $tokoStokBarang->nama_toko }}</td>
                <td class="py-2 px-4 border">{{ $tokoStokBarang->toko->nama_pemilik }}</td>
                <td class="py-2 px-4 border">{{ $tokoStokBarang->barang->nama_barang }}</td>
                <td class="py-2 px-4 border">{{ $tokoStokBarang->jumlah }}</td>
                @endforeach
        </tbody>
    </table>
</body>

</html>