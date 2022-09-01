<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student Form</h1>
    <form action="{{ url('/students/' . $student->id) }}" method="post">
        @method('put')
        @csrf
        <label>Student Name:</label>
        <input type="text" placeholder="Enter Student Name" name="name" value="{{ $student->name }}" />
        @error('name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Email:</label>
        <input type="email" placeholder="Enter Student Email" name="email" value="{{ $student->email }}"/>
        @error('email')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Phone:</label>
        <input type="text" placeholder="Enter Student Phone" name="phone" value="{{ $student->phone }}"/>
        @error('phone')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label for="teacher">Select Teacher</label>
        <select name="teacher">
            <option value="">Select Teacher</option>
            @foreach ($teachers as $teacher)
                <option>{{ $teacher->name }}</option>
            @endforeach
        </select>
        @error('teacher')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student City:</label>
        <input type="text" placeholder="Enter Student City" name="city" value="{{ $student->city }}"/>
        @error('city')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student State:</label>
        <select name="state">
            <option value="">Select state</option>
            <option value="maharashtra" {{ $student->state == "maharashtra" ? 'selected' : '' }}>Maharashtra</option>
            <option value="madhya pradesh" {{ $student->state == "madhya pradesh" ? 'selected' : '' }}>Madhya Pradesh</option>
            <option value="Gujrat" {{ $student->state == "Gujrat" ? 'selected' : '' }}>Gujrat</option>
        </select>
        @error('state')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <label>Student Address:</label>
        <textarea name="address" cols="20" rows="10">{{ $student->address }}</textarea>
        @error('address')
            <div style="color: red">{{ $message }}</div>
        @enderror
        <br/>
        <button type="submit">Save Student</button>
    </form>
</body>
</html>
