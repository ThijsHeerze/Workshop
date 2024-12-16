

<h1>nieuwe klant toevoegen</h1>

<form action="{{ route('klanten.store') }}" method="POST">
    @csrf
    <input type="text" name="naam" placeholder="naam">
    <input type="number" name="leeftijd" placeholder="leeftijd">
    <input type="email" name="email" placeholder="email">
    <input type="text" name="profilepic" placeholder="profilepic">
    <input type="submit"/>
</form>