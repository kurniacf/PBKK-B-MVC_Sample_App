<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Nilai</h2>
    <form action="{{ route('scores.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="student_id">Siswa</label>
            <select class="form-control" id="student_id" name="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subject_id">Mata Pelajaran</label>
            <select class="form-control" id="subject_id" name="subject_id">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="score">Nilai</label>
            <input type="number" class="form-control" id="score" name="score" placeholder="Masukkan Nilai">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
