<!DOCTYPE html>
<html>
<head>
    <title>Data Pemilik Kost</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
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
    <h1>Data Pemilik Kost</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($owners as $owner)
                <tr>
                    <td>{{ $owner->nama }}</td>
                    <td>{{ $owner->email }}</td>
                    <td>{{ $owner->alamat }}</td>
                    <td>{{ $owner->telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
