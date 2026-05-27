@extends('layouts.app')

@section('title', 'Редактировать книгу')

@section('content')
    <div class="header">
        <h1>Редактировать книгу</h1>
    </div>

    <div class="card">
        <form method="post" action="{{ route('books.update', $book) }}">
            @method('put')
            @include('books._form')
        </form>
    </div>
@endsection
