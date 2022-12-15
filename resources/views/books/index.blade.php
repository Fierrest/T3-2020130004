@extends('layout.master')
@section('title', 'books List')
@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush
@section('content')
    <div class="table-responsive" <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>books List</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>judul</th>
                    <th>halaman</th>
                    <th>kategori</th>
                    <th>penerbit</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->id }}</td>
                        <td><a href="{{ route('books.show', $book->id) }}">{{ $book->judul }}</a></td>
                        <td>{{ $book->halaman }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td style="width: 40%">{{ $book->description }}</td>
                    </tr>
                @empty
                    <tr>
                        <td align="center" colspan="6">No data yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    </div>
@endsection
