@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-md-12 text-center mb-3">
            <h2 style="font-family: cambria;">Daftar Penulis</h2>
        </div>
        <a href="{{ route('penulis.create') }}" class="btn btn-primary mb-3">Tambah Penulis</a>

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
                                <th>Kode Penulis</th>
                                <th>Nama Penulis</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penulis as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nama_penulis }}</td>
                                    <td>{{ $p->tempat_lahir }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>
                                    <a href="{{ route('penulis.edit', ['id' => $p->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('penulis.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data penulis.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
    </div>
@endsection
