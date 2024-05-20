<!-- resources/views/peminjaman/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Peminjaman</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Peminjaman</h2>
        <a href="{{ route('peminjaman.create') }}" class="btn btn-success mb-3">Tambah Peminjaman</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Buku</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjamans as $peminjaman)
                <tr>
                    <td>{{ $peminjaman->buku->judul }}</td>
                    <td>{{ $peminjaman->anggota->nama }}</td>
                    <td>{{ $peminjaman->peminjaman }}</td>
                    <td>{{ $peminjaman->pengembalian }}</td>
                    <td>{{ $peminjaman->status }}</td>
                    <td>
                        <a href="{{ route('peminjaman.show', $peminjaman->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>