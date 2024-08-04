<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Tambah Peminjaman</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('peminjaman.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="no_buku">Buku:</label>
                        <select id="no_buku" name="no_buku" class="form-control" required>
                            @foreach ($buku as $b)
                                <option value="{{ $b->id }}">{{ $b->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="anggota_id">Anggota:</label>
                        <select id="id_anggota" name="id_anggota" class="form-control" required>
                            @foreach ($anggota as $a)
                                <option value="{{ $a->id }}">{{ $a->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tgl_peminjaman">Tanggal Peminjaman:</label>
                            <input type="date" id="tgl_peminjaman" name="tgl_peminjaman" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
                            <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select id="status" name="status" class="form-control" required>
                            <option value="kembali">Kembali</option>
                            <option value="belum">Belum</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
