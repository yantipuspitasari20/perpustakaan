@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-md-12 text-center mb-3">
            <h2 style="font-family: cambria;">Daftar Buku</h2>
        </div>
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Edisi</th>
                    <th>Nama Rak</th>
                    <th>Tahun</th>
                    <th>Penerbit</th>
                    <th>Nama Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($buku as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->edisi }}</td>
                        <td>{{ $b->rak ? $b->rak->lokasi : 'Rak tidak ditemukan' }}</td>
                        <td>{{ $b->tahun }}</td>
                        <td>{{ $b->penerbit }}</td>
                        <td>{{ $b->penulis->kd_penulis }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('buku.destroy', $b->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
