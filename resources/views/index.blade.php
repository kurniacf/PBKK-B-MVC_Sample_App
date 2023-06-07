<!DOCTYPE html>
<html>
<head>
    <title>Sistem Penilaian Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Sistem Penilaian Siswa</h1>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nilai Siswa</h5>
                    <p class="card-text">Kelola nilai-nilai siswa.</p>
                    <a href="{{ route('scores.index') }}" class="btn btn-primary">Lihat Nilai</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Siswa</h5>
                    <p class="card-text">Kelola data siswa.</p>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Lihat Data Siswa</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mata Pelajaran</h5>
                    <p class="card-text">Kelola data mata pelajaran.</p>
                    <a href="{{ route('subjects.index') }}" class="btn btn-primary">Lihat Mata Pelajaran</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
