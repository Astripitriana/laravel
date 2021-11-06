<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" align="center">
    <h2 align="center">Tampilkan Data Post</h2>

       <th> id_barang</th>
       <th> nama </th>
       <th> varian </th>
       <th> harga_beli </th>
       <th> harga_jual</th>
    <tr>
        @foreach ($brg as $data)

        <td>{{$data['id_barang']}} </td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['varian'] }}</td>
        <td> {{ $data['harga_beli']}}  </td>
        <td>{{ $data['harga_jual']}} </td>
    </tr>
    @endforeach
    </table>
</body>
</html>
