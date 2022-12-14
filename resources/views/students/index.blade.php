<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Student List
        <br>
        <a href="{{ url('/students/create') }}">Create Student</a>
        <a href="{{ url('/teachers') }}">Teachers</a>
    </h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ url('/students/' . $student->id) }}">view</a>
                    <a href="{{ url('/students/' . $student->id . '/edit') }}">edit</a>
                    <form action="{{ url('/students/' . $student->id) }}" method="post" style="display: inline" onsubmit="return confirm('Are you sure you want to delete this student?')">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
