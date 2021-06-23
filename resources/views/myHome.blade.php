<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies database</h1>
    <h3>Movies List:</h3>
@foreach($movieList as $movie)
    <ul style="list-style: none; padding-left: 0">
        <li>{{ $movie->id }}) {{ $movie->title }}</li>
    </ul>
@endforeach
</body>
</html>