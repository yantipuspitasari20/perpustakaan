@extends('layouts.app')

@section('title', 'Edit Sanksi')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Sanksi</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sanksi.update', $sanksi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_anggota">ID Anggota:</label>
            <select class="form-control" id="id_anggota" name="id_anggota">
                @foreach ($anggota as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $sanksi->id_anggota ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_peminjaman">ID Peminjaman:</label>
            <select class="form-control" id="id_peminjaman" name="id_peminjaman">
                @foreach ($peminjaman as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $sanksi->id_peminjaman ? 'selected' : '' }}>{{ $item->id }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
