<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border=1>
        <th>name</th>
        <th>city</th>
        @foreach($users as $user)
        <tr>

        
        <td>{{$user->name}}</td>
        <td>{{$user->city->city_name}}</td>
        @endforeach
        </tr>
    </table>


</body>

</html>