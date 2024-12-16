<h1>Klanten</h1>

@foreach ($klanten as $klant)
    <div>{{ $klant->naam }}</div>
    <div>{{ $klant->leeftijd }}</div>
    <div>{{ $klant->email }}</div>
    <div>{{ $klant->profilepic }}</div>
    <a href="{{route('klanten.edit', $klant)}}">bewerken</a>
    <form action="{{route('klanten.destroy', $klant)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete"/>
    </form>
    
@endforeach