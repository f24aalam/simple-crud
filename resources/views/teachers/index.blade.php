<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
</head>
<body>
    <h1>Teacher List
        <br>
        <a href="{{ url('/teachers/create') }}">Create Teahcer</a>
        <a href="{{ url('/students') }}">Students</a>
    </h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>
                    <a href="{{ url('/teachers/' . $teacher->id) }}">view</a>
                    <a href="{{ url('/teachers/' . $teacher->id . '/edit') }}">edit</a>
                    <form action="{{ url('/teachers/' . $teacher->id) }}" method="post" style="display: inline" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
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
