<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h3>Użytkownicy:</h3>
        Imię i nazwisko: {{ $firstName }} {{ $lastName }}
        <br>
        Miasto: {{ $city }}
        <br>
        Hobby: 
        <ul>@foreach ($hobby as $i)
            <li>{{ $i }}</li>
        @endforeach
        </ul>
</body>
</html>