<!-- resources/views/anggota/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Daftar Anggota</h2>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Anggota</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $a)
                        <tr>
                            <td>{{ $a->id_anggota }}</td>
                            <td>{{ $a->nama }}</td>
                            <td>{{ $a->no_hp }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{ $a->email }}</td>
                            <td>
                                <a href="{{ route('anggota.show', $a->id_anggota) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('anggota.edit', $a->id_anggota) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('anggota.destroy', $a->id_anggota) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('anggota.create') }}" class="btn btn-success mb-3">Tambah Anggota</a>
            </div>
        </div>
    </div>
</body>

</html>