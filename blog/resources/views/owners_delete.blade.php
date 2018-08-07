<!DOCTPE html>
<html>
<head>
    <title>View Car Owners Records</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>surname</td>
    </tr>
    @foreach ($owners as $owner)
        <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->surname }}</td>
            <td><a href = 'delete/{{ $owner->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>