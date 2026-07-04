<!-- public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('student.edit', compact('student'));
} -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}"><br><br>
    <input type="email" name="email" value="{{ $student->email }}"><br><br>
    <input type="number" name="age" value="{{ $student->age }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>