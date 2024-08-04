@extends('layouts.main')

@section('content')
<div class="row">
        <div class="col-md-12 text-center mb-3">
            <h2 style="font-family: cambria;">Daftar Rak</h2>
        </div>
        <div class="col-md-12 mb-3">
            <a href="{{ route('rak.create') }}" class="btn btn-primary">Tambah Rak</a>
        </div>

<table class="table table-striped">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rak as $rak)
                <tr>
                    <td>{{ $rak->id }}</td>
                    <td>{{ $rak->lokasi }}</td>
                    <td>
                    <a href="{{ route('rak.edit', ['rak' => $rak->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('rak.destroy', ['rak' => $rak->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
