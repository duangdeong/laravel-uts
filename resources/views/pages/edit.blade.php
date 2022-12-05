@extends('layout.layout')

@section('content')
    <form method="POST" action="{{ route('buku.update', $jsonfile['id']) }}">
        @csrf
        @method('PUT')
        <div class="mb-3 d-none">
            <label for="id" class="col-form-label">Id</label>
            <input type="text" value="{{ $jsonfile['id'] }}" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="author" class="col-form-label">Author</label>
            <input type="text" value="{{ $jsonfile['author'] }}" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="title" class="col-form-label">Title</label>
            <input type="text" value="{{ $jsonfile['title'] }}" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="Deskripsi" class="col-form-label">Deskripsi</label>
            <textarea class="form-control" id="Deskripsi" name="deskripsi">{{ $jsonfile['deskripsi'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Buku</button>
    </form>
@endsection