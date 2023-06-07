<!DOCTYPE html>
<html>
<head>
    <title>Detail Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Detail Nilai</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Siswa: {{ $score->student->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Mata Pelajaran: {{ $score->subject->name }}</h6>
            <p class="card-text">Nilai: {{ $score->score }}</p>
            <a href="{{ route('scores.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
</body>
</html>
