<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Mata Pelajaran</h2>
    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Mata Pelajaran">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
