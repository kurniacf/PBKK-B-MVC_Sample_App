<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Nilai</h2>
    <form action="{{ route('scores.update', $score->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="student_id">Siswa</label>
            <select class="form-control" id="student_id" name="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->id }}" @if($score->student_id == $student->id) selected @endif>{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subject_id">Mata Pelajaran</label>
            <select class="form-control" id="subject_id" name="subject_id">
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" @if($score->subject_id == $subject->id) selected @endif>{{ $subject->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="score">Nilai</label>
            <input type="number" class="form-control" id="score" name="score" value="{{ $score->score }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
