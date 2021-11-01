<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tampilkan Data Post</h2>
    @foreach ($barang as $data)
        id_barang: {{$data['id_barang']}} <br>
        nama : {{ $data['nama'] }} <br>
        varian : {{ $data['varian'] }} <br>
        harga_beli : {{ $data['harga_beli']}}<br>
        harga_jual : {{ $data['harga_jual']}}<br>
    <hr>
    @endforeach
</body>
</html>
