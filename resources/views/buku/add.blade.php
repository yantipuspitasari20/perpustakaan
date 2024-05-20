<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Tambah Buku</h1>
        <form action="{{ route('buku.store') }}" method="POST" class="mt-3">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul') }}" class="form-control">
                @error('judul')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="edisi">Edisi:</label>
                <input type="text" id="edisi" name="edisi" value="{{ old('edisi') }}" class="form-control">
                @error('edisi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_rak">No Rak:</label>
                <input type="text" id="no_rak" name="no_rak" value="{{ old('no_rak') }}" class="form-control">
                @error('no_rak')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="text" id="tahun" name="tahun" value="{{ old('tahun') }}" class="form-control">
                @error('tahun')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" value="{{ old('penerbit') }}" class="form-control">
                @error('penerbit')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kd_penulis">Kode Penulis:</label>
                <input type="text" id="kd_penulis" name="kd_penulis" value="{{ old('kd_penulis') }}" class="form-control">
                @error('kd_penulis')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>