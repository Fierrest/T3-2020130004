@extends('layout.master')
@section('title', 'Add New book')
@section('content')
<h2>Add New book</h2>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="id">id</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="id" id="id" value="{{ old('id') }}">
            @error('id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="judul">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul') }}">
            @error('judul')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="halaman">halaman</label>
        <textarea class="form-control @error('halaman') is-invalid @enderror" name="halaman" id="halaman" rows="3">{{ old('halaman') }}</textarea>
        @error('halaman')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kategori">kategori</label>
        <textarea class="form-control @error('halaman') is-invalid @enderror" name="kategori" id="kategori" rows="3">{{ old('kategori') }}</textarea>
        @error('kategori')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="penerbit">penerbit</label>
        <textarea class="form-control @error('halaman') is-invalid @enderror" name="penerbit" id="penerbit" rows="3">{{ old('penerbit') }}</textarea>
        @error('penerbit')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    </div>
    <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form>
@endsection
