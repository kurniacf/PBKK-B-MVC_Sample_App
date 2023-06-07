<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Nilai</h2>
    <a href="{{ route('scores.create') }}" class="btn btn-primary mb-3">Tambah Nilai</a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Siswa</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($scores as $key => $score)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $score->student->name }}</td>
                <td>{{ $score->subject->name }}</td>
                <td>{{ $score->score }}</td>
                <td>
                    <a href="{{ route('scores.show', $score->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('scores.edit', $score->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('scores.destroy', $score->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus nilai ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
