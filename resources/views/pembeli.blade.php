<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
    <h2 align="center">Tampilkan Data Post</h2>

        <th>id_pembeli</th>
        <th>nama</th>
        <th>jns_kelamin</th>
        <th>alamat </th>
        <th>kode_pos </th>
        <th>kota </th>
        <th>tgl_lahir</th>
        <tr>
    @foreach ($pembeli as $data)
    <td>{{$data['id_pembeli']}} </td>
    <td> {{ $data['nama'] }}</td>
    <td>{{ $data['jns_kelamin'] }}</td>
    <td>{{ $data['alamat']}}</td>
    <td>{{ $data['kode_pos']}}</td>
    <td>{{ $data['kota']}}</td>
    <td>{{ $data['tgl_lahir']}}</td>
</tr>
    @endforeach
    </table>
</body>
</html>
