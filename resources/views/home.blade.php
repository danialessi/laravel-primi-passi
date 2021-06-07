<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
    <h1>{{$welcome}}</h1>
    <h2>Visita le altre pagine</h2>
    <ul>
        @foreach ($links as $link)
        <li><a href="{{ route($link) }}">{{$link}}</a></li>
        @endforeach
    </ul>
</body>
</html>