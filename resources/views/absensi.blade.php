<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
<h2>Absensi Siswa Kelas XII RPL 3</h2>
    <ul>
        @foreach($data as $data2)
        Nis              : {{$data2['Nis']}} <br>
        Nama             : {{$data2['Nama']}}<br>
        Jenis Kelamin    : {{$data2['Jenis Kelamin']}}<br>
        Kelas            : {{$data2['Kelas']}}<br>
        Alamat           : {{$data2['Alamat']}}<br>

    <hr>
    @endforeach</ul>

</body>
</html>
