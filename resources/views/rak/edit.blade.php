@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Edit Rak</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('rak.update', ['rak' => $rak->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $rak->lokasi }}" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
