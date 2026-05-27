@csrf

<div class="field">
    <label for="title">Название</label>
    <input id="title" name="title" value="{{ old('title', $book->title) }}" required>
    @error('title')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="field">
    <label for="author">Автор</label>
    <input id="author" name="author" value="{{ old('author', $book->author) }}" required>
    @error('author')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="field">
    <label for="category_id">Категория</label>
    <select id="category_id" name="category_id" required>
        <option value="">Выберите категорию</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected((int) old('category_id', $book->category_id) === $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="field">
    <label for="published_year">Год публикации</label>
    <input id="published_year" name="published_year" type="number" min="0" max="{{ date('Y') }}" value="{{ old('published_year', $book->published_year) }}">
    @error('published_year')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="field">
    <label for="description">Описание</label>
    <textarea id="description" name="description">{{ old('description', $book->description) }}</textarea>
    @error('description')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<div class="actions">
    <button class="button" type="submit">Сохранить</button>
    <a class="button secondary" href="{{ route('books.index') }}">Назад</a>
</div>
