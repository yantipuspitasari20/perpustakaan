<!-- resources/views/anggota/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detail Anggota</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Detail Anggota</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nama:</strong> {{ $anggota->nama }}
                    </div>
                    <div class="mb-3">
                        <strong>No HP:</strong> {{ $anggota->no_hp }}
                    </div>
                    <div class="mb-3">
                        <strong>Alamat:</strong> {{ $anggota->alamat }}
                    </div>
                    <div class="mb-3">
                        <strong>Email:</strong> {{ $anggota->email }}
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
