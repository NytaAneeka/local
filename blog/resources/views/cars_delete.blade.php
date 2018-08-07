<!DOCTPE html>
<html>
<head>
    <title>View Cars Records</title>
</head>
<body>
<table border = "1">
    <tr>
        <td>id</td>
        <td>reg_number</td>
        <td>brand</td>
        <td>model</td>
        <td>owner_id</td>
    </tr>
    @foreach ($cars as $car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->reg_number }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->owner_id }}</td>
            <td><a href = 'delete/{{ $car->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>