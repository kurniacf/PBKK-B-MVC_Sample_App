<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Mata Pelajaran</h2>
    <a href="{{ route('subjects.create') }}" class="btn btn-primary mb-3">Tambah Mata Pelajaran</a>
    <ul class="list-group">
        @foreach ($subjects as $subject)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $subject->name }}
                <div>
                    <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-sm btn-success">Edit</a>
                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display: inline-block;">
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
