<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> Ispis trazenog tima: </h1>
        (ime, email, adresa, grad)
        <h1>{{ $team }}</h1>
        <h2>
            ime je: {{ $team->name }},  email:  {{ $team->email }},
              adresa: {{ $team->adress }},   grad je: {{ $team->city }}
        </h2>
    </div>
</body>
</html>
{{ $team }}