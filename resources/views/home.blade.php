<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts - Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif; 
            background-color: #f8f9fa;  
        }
        .dashboard-container {
            margin-top: 50px;
        }
        .dashboard-card {
            transition: transform 0.2s;
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }
        .dashboard-icon {
            font-size: 2em;
            color: #007bff; /* Icon color */
        }
        .card-title {
            color: #343a40; /* Title color */
            font-weight: bold; /* Tebal */
        }
        .btn-primary {
            background-color: #007bff !important; /* Button background color */
            border-color: #007bff !important; /* Button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3 !important; /* Button hover background color */
            border-color: #0056b3 !important; /* Button hover border color */
        }
    </style>
</head>
<body>
    <div class="container dashboard-container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>Dashboard Perpustakaan</h1>
                <p>Selamat datang di sistem perpustakaan kami. Pilih salah satu menu di bawah ini untuk melanjutkan.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="card-title">Anggota</h5>
                        <p class="card-text">Kelola data anggota perpustakaan.</p>
                        <a href="{{ route('anggota.index') }}" class="btn btn-primary">Lihat Anggota</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-book"></i>
                        </div>
                        <h5 class="card-title">Peminjaman</h5>
                        <p class="card-text">Kelola data peminjaman buku.</p>
                        <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Lihat Peminjaman</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h5 class="card-title">Buku</h5>
                        <p class="card-text">Kelola data buku perpustakaan.</p>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary">Lihat Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <h5 class="card-title">Rak</h5>
                        <p class="card-text">Kelola data rak buku.</p>
                        <a href="{{ route('rak.index') }}" class="btn btn-primary">Lihat Rak</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-user-edit"></i>
                        </div>
                        <h5 class="card-title">Penulis</h5>
                        <p class="card-text">Kelola data penulis buku.</p>
                        <a href="{{ route('penulis.index') }}" class="btn btn-primary">Lihat Penulis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card dashboard-card text-center">
                    <div class="card-body">
                        <div class="dashboard-icon mb-3">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h5 class="card-title">Sanksi</h5>
                        <p class="card-text">Kelola data sanksi.</p>
                        <a href="{{ route('sanksi.index') }}" class="btn btn-primary">Lihat Sanksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
