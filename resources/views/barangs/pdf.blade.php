<!DOCTYPE html>
<html>

<head>
    <title>Data Barang</title>
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
    <h1>Data Barang</h1>
    <table>
        <thead>
            <tr>
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Nama Barang</th>
                <th class="py-2 px-4 border">Supplier</th>
                <th class="py-2 px-4 border">Harga</th>
                <th class="py-2 px-4 border">Stok</th>
                <th class="py-2 px-4 border">Rak Penyimpanan</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($barangs as $barang)
            <tr>
                        <td class="py-2 px-4 border">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border">{{ $barang->nama_barang }}</td>
                        <td class="py-2 px-4 border">{{ $barang->supplier->nama_supplier }}</td>
                        <td class="py-2 px-4 border">{{ $barang->harga }}</td>
                        <td class="py-2 px-4 border">{{ $barang->stok }}</td>
                        <td class="py-2 px-4 border">{{ $barang->rakPenyimpanan->nama_rak }} - {{ $barang->rakPenyimpanan->lokasi }}</td>
            @endforeach
        </tbody>
    </table>
</body>

</html>