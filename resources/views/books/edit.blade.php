@extends('layout.master')
@section('title', 'Edit Book')
@section('content')
    <h2>Update buku</h2>
    <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="page">halaman</label>
                <input type="text" class="form-control @error('page') is-invalid @enderror" name="page" id="page"
                    value="{{ old('page') ?? $book->page }}">
                @error('page')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="category">kategori</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    id="category" value="{{ old('category') ?? $book->category }}">
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="publisher">penerbit</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher"
                    id="publisher" value="{{ old('publisher') ?? $book->publisher }}">
                @error('publisher')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
</form> @endsection
