<!-- resources/views/anggota/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Anggota</h2>
            <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $anggota->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
