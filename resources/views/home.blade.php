<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEPAGE</title>
</head>
<body>

    <a href="{{ route('about')}}"> vai alla sezione about </a> <br>
    <a href="{{route('teacher')}}">Vai alla sezione teachers</a>

    <h1>IO SONO LA HOMEPAGE</h1>

 <ul>
     @forelse ($list_of_teachers as $teacher)
     <li>
         {{ $teacher }}
     </li>
         
     @empty
     <h3>
         Non ci sono insegnanti
     </h3>
         
     @endforelse
 </ul>

    

    
</body>
</html>