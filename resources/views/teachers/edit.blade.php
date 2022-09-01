<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Teacher</title>
</head>
<body>
    <h1>Create Teacher Form</h1>
    <form action="{{ url('/teachers/' . $teacher->id) }}" method="post">
        @csrf
        @method('put')
        <label>Teacher Name:</label>
        <input type="text" placeholder="Enter Teacher Name" name="name" value="{{ $teacher->name }}" />
        @error('name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Teacher Email:</label>
        <input type="email" placeholder="Enter Teacher Email" name="email" value="{{ $teacher->email }}" />
        @error('email')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <button type="submit">Save Teacher</button>
    </form>
</body>
</html>
