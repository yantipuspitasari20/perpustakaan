<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
</head>
<body>
    <h1>Edit Peminjaman</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="no_buku">Judul Buku:</label>
        <select name="no_buku" id="no_buku">
            @foreach ($bukus as $buku)
                <option value="{{ $buku->id }}" {{ $buku->id == $peminjaman->no_buku ? 'selected' : '' }}>{{ $buku->judul }}</option>
            @endforeach
        </select>
        <br>

        <label for="anggota">Nama Anggota:</label>
        <select name="anggota" id="anggota">
            @foreach ($anggotas as $anggota)
                <option value="{{ $anggota->id }}" {{ $anggota->id == $peminjaman->anggota ? 'selected' : '' }}>{{ $anggota->nama }}</option>
            @endforeach
        </select>
        <br>

        <label for="peminjaman">Tanggal Peminjaman:</label>
        <input type="date" name="peminjaman" id="peminjaman" value="{{ $peminjaman->peminjaman }}">
        <br>

        <label for="pengembalian">Tanggal Pengembalian:</label>
        <input type="date" name="pengembalian" id="pengembalian" value="{{ $peminjaman->pengembalian }}">
        <br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="belum" {{ $peminjaman->status == 'belum' ? 'selected' : '' }}>Belum</option>
            <option value="kembali" {{ $peminjaman->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
        </select>
        <br>

        <button type="submit">Update</button>
    </form>

    <p><a href="{{ route('peminjaman.index') }}">Kembali ke Daftar Peminjaman</a></p>
</body>
</html>
