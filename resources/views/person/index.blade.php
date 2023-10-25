<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!--name, street, home_nr, zipcode, city, phone_nr-->
        <h1>person</h1>
        <a href="{{route('person.create')}}">Create new Person</a>
        <div>
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>
        <div>
            <table border="1">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>street</th>
                    <th>housenr</th>
                    <th>zipcode</th>
                    <th>city</th>
                    <th>phonenr</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($person as $tablePerson)
                <tr>
                    <td>{{$tablePerson->id}}</td>
                    <td>{{$tablePerson->name}}</td>
                    <td>{{$tablePerson->street}}</td>
                    <td>{{$tablePerson->home_nr}}</td>
                    <td>{{$tablePerson->zipcode}}</td>
                    <td>{{$tablePerson->city}}</td>
                    <td>{{$tablePerson->phone_nr}}</td>
                    <td>
                        <a href="{{route('person.edit', ['person' => $tablePerson])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('person.destroy', ['person' => $tablePerson])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
    </html>


</body>
</html>
