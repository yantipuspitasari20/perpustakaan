<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Tambah Buku</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="edisi">Edisi:</label>
                <input type="text" id="edisi" name="edisi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="no_rak">Nama Rak:</label>
                <select id="no_rak" name="no_rak" class="form-control" required>
                    @foreach ($rak as $r)
                        <option value="{{ $r->id }}">{{ $r->lokasi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="date" id="tahun" name="tahun" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kd_penulis">Penulis:</label>
                <select id="kd_penulis" name="kd_penulis" class="form-control" required>
                    @foreach ($penulis as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penulis }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
