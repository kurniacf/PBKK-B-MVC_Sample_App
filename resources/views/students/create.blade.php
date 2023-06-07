<!DOCTYPE html>
<html lang="">
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Siswa</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Siswa">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
