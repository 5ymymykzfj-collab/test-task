<?php

namespace Tests\Feature;

use App\Models\Book;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_redirects_to_books_list(): void
    {
        $this->get('/')
            ->assertRedirect(route('books.index'));
    }

    public function test_books_list_displays_seeded_books(): void
    {
        $this->seed(DatabaseSeeder::class);

        $this->assertSame(10, Book::count());

        $this->get(route('books.index'))
            ->assertOk()
            ->assertSee('Список книг')
            ->assertSee('Мастер и Маргарита');
    }
}
