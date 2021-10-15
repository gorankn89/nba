@foreach ($teams as $team)
<a href="players/player/{{ $team->id }}"><h1>Ispis Tima</h1>
   <p>Nas tim ima id {{ $team->id }}</p> 
   <p> Nas tim se zove {{ $team->name }}</p> 
   <p> Nas tim je iz grada{{ $team->city }}</p> 
   <p>  Nas tim ima email {{ $team->email }}</p>
   <p></p> Nas tim je na adresi {{ $team->adress }}</p>
</a>
    
@endforeach