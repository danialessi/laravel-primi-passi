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
        <li><a href="{{ route('shop') }}">Shop</a></li>
        <li><a href="{{ route('contacts') }}">Contacts</a></li>
        <li><a href="{{ route('photos') }}">Photos</a></li>
    </ul>
</body>
</html>