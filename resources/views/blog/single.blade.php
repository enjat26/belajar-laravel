<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
</head>
<body>
    <h1>Belajar Controller</h1>
    <p>Ini adalah link {{ $id }}</p>
    <p>Nama {{ $nama }}</p>
    <ul>
        @foreach($hewan as $h)
            <li>{{ $h }}</li>
        @endforeach
    </ul>
</body>
</html>