<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create product</h1>
    <a href="{{route('person.index')}}">Go back</a>
    <form method="post" action="{{route('person.update', ['person' => $person])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$person->name}}">
        </div>
        <div>
            <label for="street">Street:</label>
            <input type="text" name="street" value="{{$person->street}}">
        </div>
        <div>
            <label for="home_nr">home number:</label>
            <input type="text" name="home_nr" value="{{$person->home_nr}}">
        </div>
        <div>
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" value="{{$person->zipcode}}">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" value="{{$person->city}}">
        </div>
        <div>
            <label for="phone_nr">PhoneNr:</label>
            <input type="text" name="phone_nr" value="{{$person->phone_nr}}">
        </div>
        <input type="submit" value="update">
    </form>
</body>
</html>
