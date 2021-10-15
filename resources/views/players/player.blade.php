<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Ispis igraca: 
        (ime, email i tim).
        Ime igraca: {{ $player->first_name }} email igraca: {{ $player->email }}  tim igraca {{ $player->team_id }}
        
    </h1>
</body>
</html>