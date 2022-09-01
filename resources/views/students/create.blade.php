<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student Form</h1>
    <form action="{{ url('/students') }}" method="post">
        @csrf
        <label>Student Name:</label>
        <input type="text" placeholder="Enter Student Name" name="name" />
        @error('name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Email:</label>
        <input type="email" placeholder="Enter Student Email" name="email" />
        @error('email')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Phone:</label>
        <input type="text" placeholder="Enter Student Phone" name="phone" />
        @error('phone')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label for="teacher">Select Teacher</label>
        <select name="teacher">
            <option value="">Select Teacher</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
            @endforeach
        </select>
        @error('teacher')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br>
        <label>Student City:</label>
        <input type="text" placeholder="Enter Student City" name="city" />
        @error('city')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student State:</label>
        <select name="state">
            <option value="">Select state</option>
            <option value="maharashtra">Maharashtra</option>
            <option value="madhya pradesh">Madhya Pradesh</option>
            <option value="Gujrat">Gujrat</option>
        </select>
        @error('state')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Address:</label>
        <textarea name="address" cols="20" rows="10"></textarea>
        @error('address')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <button type="submit">Save Student</button>
    </form>
</body>
</html>
