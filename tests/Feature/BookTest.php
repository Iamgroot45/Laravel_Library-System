<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Book;

class BookTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function books_showAll()
    {

        factory(Book::class, 5)->create();

        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    /** @test */
    public function books_showSpecific()
    {

        $book = factory(Book::class)->create();

        $response = $this->get('/books/'.$book -> id);

        $response->assertStatus(200);

    }

    /** @test */
    public function books_create()
    {

        $response = $this->get('/books/create');

        $response->assertStatus(200);
    }

    /** @test */
    public function books_store()
    {
        $this -> withoutExceptionHandling();
        $book = factory(Book::class)->raw();

        $response = $this->post('/books', $book);

        $this -> assertDatabaseHas('books', $book);
        $response->assertRedirect('/books');

    }

    /** @test */
    public function books_edit()
    {
        $book = factory(Book::class)->create();

        $response = $this->get('/books/'.$book -> id.'/edit');

        $response->assertStatus(200);
    }

    /** @test */
    public function books_update()
    {
        $book = factory(Book::class)->create();
        $updateData = factory(Book::class)->raw();

        $response = $this->put('/books/'.$book -> id, $updateData);

        $this -> assertDatabaseHas('books', $updateData);
        $response->assertRedirect('/books');

    }

    /** @test */
    public function books_destroy()
    {
        $book = factory(Book::class)->create();

        $response = $this->delete('/books/'.$book -> id);

        $this -> assertDeleted('books', ["id" => $book -> id]);
        $response->assertRedirect('/books');



    }
}
