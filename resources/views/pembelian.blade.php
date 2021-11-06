<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
    <h2 align="center">Tampilkan Data Post</h2>

       <th> id_pembelian </th>
        <th>nama_barang </th>
        <th>nama_suplier</th>
        <th> qty  </th>
        <th> tgl</th>

        <tr>
     @foreach ($pembelian as $data)
<td>{{$data['id_pembelian']}} </td>
<td>{{ $data['nama_barang'] }}</td>
<td>{{ $data['nama_suplier'] }}</td>
<td> {{ $data['qty']}}</td>
<td>{{ $data['tgl']}}</td>


        </tr>
    @endforeach
    </table>
</body>
</html>
