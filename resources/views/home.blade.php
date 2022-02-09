<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEPAGE</title>
</head>
<body>

    <h1>IO SONO LA HOMEPAGE</h1>

    <h2>Nome : {{$name}}</h2>
    <h2>Cognome : {{$surname}}</h2>

    <ul>
        @forelse ($courses as $course)

        <li>
            {{ $course }}
        </li>
        
        
        
    @empty

    <h3> NESSUN CORSO TROVATO PER {{ $name }} {{ $surname}}</h3>
        
    @endforelse

    </ul>

    

    
</body>
</html>