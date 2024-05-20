<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
</head>
<body>
    <h1>Tambah Peminjaman</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <label for="no_buku">Judul Buku:</label>
        <select name="no_buku" id="no_buku">
            @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
            @endforeach
        </select>
        <br>

        <label for="anggota">Nama Anggota:</label>
        <select name="anggota" id="anggota">
            @foreach ($anggotas as $anggota)
                <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
            @endforeach
        </select>
        <br>

        <label for="peminjaman">Tanggal Peminjaman:</label>
        <input type="date" name="peminjaman" id="peminjaman">
        <br>

        <label for="pengembalian">Tanggal Pengembalian:</label>
        <input type="date" name="pengembalian" id="pengembalian">
        <br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="belum">Belum</option>
            <option value="kembali">Kembali</option>
        </select>
        <br>

        <button type="submit">Simpan</button>
    </form>

    <p><a href="{{ route('peminjaman.index') }}">Kembali ke Daftar Peminjaman</a></p>
</body>
</html>
