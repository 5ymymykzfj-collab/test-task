@extends('layouts.app')

@section('title', 'Список книг')

@section('content')
    <div class="header">
        <h1>Список книг</h1>
        <a class="button" href="{{ route('books.create') }}">Добавить книгу</a>
    </div>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Автор</th>
                    <th>Категория</th>
                    <th>Год</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category->name }}</td>
                        <td>{{ $book->published_year ?: 'Не указан' }}</td>
                        <td>
                            <div class="actions">
                                <a class="button secondary" href="{{ route('books.edit', $book) }}">Изменить</a>
                                <form method="post" action="{{ route('books.destroy', $book) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="button danger" type="submit">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Книг пока нет.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $books->links() }}
        </div>
    </div>
@endsection
