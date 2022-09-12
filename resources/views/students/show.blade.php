<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Student Details</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <th>Teacher</th>
            <td>{{ $teacher->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $student->phone }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $student->city }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $student->state }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $student->address }}</td>
        </tr>
    </table>
</body>
</html>
