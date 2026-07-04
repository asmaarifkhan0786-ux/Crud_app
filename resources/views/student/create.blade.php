<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br><br>

        <button type="submit">Save</button>
    </form>
<!-- <h2>Add Student</h2>

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="number" name="age" placeholder="Age"><br><br>

    <button type="submit">Save</button>
</form> -->
</body>
</html>