<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Mata Pelajaran</h2>
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
