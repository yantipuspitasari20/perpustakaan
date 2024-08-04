@extends('layouts.main')

@section('title', 'Daftar Sanksi')

@section('content')
<div class="col-md-12 text-center mb-3">
            <h2 style="font-family: cambria;">Daftar Sanksi</h2>
        </div>
    <a href="{{ route('sanksi.create') }}" class="btn btn-primary mb-3">Tambah Sanksi</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Anggota</th>
                <th>ID Peminjaman</th>
                <th>Jumlah Denda</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sanksi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->id_peminjaman }}</td>
                <td>{{ $item->jumlah_denda }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('sanksi.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('sanksi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
@endsection
