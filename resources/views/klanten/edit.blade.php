<h1>bestaande klant wijzigen</h1>

<form action="{{ route('klanten.update', $klant->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="naam" placeholder="naam" value="{{ $klant->naam }}">
    <input type="number" name="leeftijd" placeholder="leeftijd" value="{{ $klant->leeftijd }}">
    <input type="email" name="email" placeholder="email" value="{{ $klant->email }}">
    <input type="text" name="profilepic" placeholder="profilepic" value="{{ $klant->profilepic }}">
    <input type="submit"/>
</form>