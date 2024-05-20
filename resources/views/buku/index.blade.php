<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku</h1>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Edisi</th>
                    <th scope="col">No Rak</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Kode Penulis</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->edisi }}</td>
                    <td>{{ $buku->no_rak }}</td>
                    <td>{{ $buku->tahun }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->kd_penulis }}</td>
                    <td>
                        <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah Buku Baru</a>
    </div>
</body>

</html>