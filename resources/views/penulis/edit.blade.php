@extends('layouts.app')

@section('content')
    <title>Edit Penulis</title>
    <div class="container mt-4">
        <h1 class="mb-4 text-center" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Edit Penulis</h1>
        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_penulis">Nama Penulis</label>
                <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" value="{{ $penulis->nama_penulis }}" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $penulis->tempat_lahir }}" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $penulis->tanggal_lahir }}" required>
            </div>
            <div class="form-group"> 
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $penulis->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
