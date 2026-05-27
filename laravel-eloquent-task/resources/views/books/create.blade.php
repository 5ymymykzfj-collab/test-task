@extends('layouts.app')

@section('title', 'Добавить книгу')

@section('content')
    <div class="header">
        <h1>Добавить книгу</h1>
    </div>

    <div class="card">
        <form method="post" action="{{ route('books.store') }}">
            @include('books._form')
        </form>
    </div>
@endsection
