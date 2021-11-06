<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">


    <h2 align="center">Tampilkan Data Post</h2>

     <tr>   <th>ih_pesanan</th>
       <th> nama_pelanggan </th>
       <th> nama_barang</th>
       <th> qty </th>
       <th> tgl_pesan </th></tr>
 @foreach ($pesanan as $data)
      <tr>
       <td> {{$data['id_pesanan']}} </td>
       <td>{{ $data['nama_pelanggan'] }} </td>
       <td>{{ $data['nama_barang'] }} </td>
       <td>{{ $data['qty']}}</td>
       <td> {{ $data['tgl_pesan']}}</td>
</tr>

    @endforeach
    </table>

</body>
</html>
