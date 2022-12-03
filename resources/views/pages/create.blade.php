@extends('layout.layout')

@section('content')
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="mb-3">
            <label for="id" class="col-form-label">Id</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="author" class="col-form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="title" class="col-form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="Deskripsi" class="col-form-label">Deskripsi</label>
            <textarea class="form-control" id="Deskripsi" name="deskripsi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Buku</button>
    </form>
@endsection