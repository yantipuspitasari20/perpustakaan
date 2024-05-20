<!-- resources/views/buku/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>

    <p><strong>Judul:</strong> {{ $buku->judul }}</p>
    <p><strong>Edisi:</strong> {{ $buku->edisi }}</p>
    <p><strong>No Rak:</strong> {{ $buku->no_rak }}</p>
    <p><strong>Tahun:</strong> {{ $buku->tahun }}</p>
    <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
    <p><strong>Kode Penulis:</strong> {{ $buku->kd_penulis }}</p>

    <p><a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a></p>
</body>
</html>
