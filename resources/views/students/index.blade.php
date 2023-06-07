<!DOCTYPE html>
<html lang="">
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Siswa</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Tambah Siswa</a>
    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->name }}
                <div>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
