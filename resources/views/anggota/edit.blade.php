<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <style>
        body {
            background-color: #f0f0f0; /* Warna latar belakang netral */
            color: #333; /* Warna teks netral */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang form */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555; /* Warna label */
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd; /* Warna border input */
            border-radius: 4px;
            background-color: #f9f9f9; /* Warna latar belakang input */
            color: #333; /* Warna teks input */
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007acc; /* Warna tombol update */
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #005f99; /* Warna tombol update saat dihover */
        }
        .alert {
            color: #ff0000;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Edit Anggota</h1>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $anggota->nama }}">
        <label for="no_hp">No HP:</label>
        <input type="text" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat">{{ $anggota->alamat }}</textarea>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $anggota->email }}">
        <input type="submit" value="Update">
    </form>
</body>
</html>
