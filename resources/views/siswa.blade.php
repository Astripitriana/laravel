<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
<h2>Siswa</h2>
    <ul>
        @foreach ($siswas as $siswas2)
        Id : {{ $siswas2['Id']}} <br>
        Nama : {{ $siswas2['Nama']}}<br>
        Jenis kelamin : {{ $siswas2['Jenis kelamin']}}<br>
        Kelas : {{ $siswas2['Kelas']}}<br>
        Mapel :

        @foreach ($siswas2 ['Mapel'] as $siswas3)
        <ul>
            <ul>
                <li> {{$siswas3}}</li>
</ul>
</ul>
    @endforeach
    @endforeach</ul>

</body>
</html>


