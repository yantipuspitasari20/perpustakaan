<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman</title>
</head>
<body>
    <h1>Detail Peminjaman</h1>

    <p><strong>Nama Anggota:</strong> {{ $peminjaman->anggota->nama }}</p>
    <p><strong>Judul Buku:</strong> {{ $peminjaman->buku->judul }}</p>
    <p><strong>Tanggal Peminjaman:</strong> {{ $peminjaman->peminjaman }}</p>
    <p><strong>Tanggal Pengembalian:</strong> {{ $peminjaman->pengembalian }}</p>
    <p><strong>Status:</strong> {{ $peminjaman->status }}</p>

    <p><a href="{{ route('peminjaman.index') }}">Kembali ke Daftar Peminjaman</a></p>
</body>
</html>
