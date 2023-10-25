<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    <!--name, street, home_nr, zipcode, city, phone_nr-->
    <h1>add person</h1>
    <a href="{{route('person.index')}}">Go back</a>
    <form method="post" action="{{route('person.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="street">Street:</label>
            <input type="text" name="street">
        </div>
        <div>
            <label for="home_nr">home number:</label>
            <input type="text" name="home_nr">
        </div>
        <div>
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city">
        </div>
        <div>
            <label for="phone_nr">PhoneNr:</label>
            <input type="text" name="phone_nr">
        </div>
        <input type="submit" value="submit a new person">
    </form>
</body>
</html>
