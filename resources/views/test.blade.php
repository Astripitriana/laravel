<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tampilkan Data Post</h2>
    @foreach ($query as $data)
        id : {{$data['id']}} <br>
        Title : {{ $data['title'] }} <br>
        Content : {{ $data['content'] }} <br>

    <hr>
    @endforeach
</body>
</html>

