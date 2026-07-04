<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>

<h2>Students List</h2>

<a href="{{ route('students.create') }}">Add Student</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
    <th>Action</th>

    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->age }}</td>
          <td>
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>

    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</td>
    </tr>
  
    @endforeach

</table>

</body>
</html>