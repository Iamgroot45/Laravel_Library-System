<?php

namespace Tests\Feature;

use App\BorrowedBook;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BorrowedBookTest extends TestCase
{
    //test show controller
    use RefreshDatabase;


    public function borrowed_books_show_all(){
        $borrowed_book = factory(BorrowedBook::class)->create();

        $response = $this->get('borrowed');

        $response->assertStatus(200);
    }


    public function borrowed_books_show_one(){
        $borrowed_book = factory(BorrowedBook::class)->create();

         $response = $this->get('borrowed/' . $borrowed_book->id);

         $response->assertStatus(200);
    }

    public function borrowed_books_create(){
        $response = $this->get('borrowed/create');

        $response->assertStatus(200);
    }


    public function borrowed_books_store(){
        $borrowed_book = factory(BorrowedBook::class)->raw();
        $response = $this->post('borrowed/', $borrowed_book);
        $this->assertDatabaseHas('borrowed_books',$borrowed_book);
        $response->assertRedirect('/borrowed');

    }

    public function borrowed_book_edit(){
        $borrowed_book = factory(BorrowedBook::class)->create();
        $response = $this->get('borrowed/' . $borrowed_book->id . '/edit');

        $response->assertStatus(200);
    }

    public function borrowed_books_update(){
        $borrowed_book = factory(BorrowedBook::class)->raw();
        $response = $this->post('borrowed/', $borrowed_book);
        $this->assertDatabaseHas('borrowed_books',  $borrowed_book);
        $response->assertRedirect('/borrowed');

    }
    /** @test */
    public function borrowed_books_destroy(){
        $borrowed_book = factory(BorrowedBook::class)->create();

        $response = $this->delete('borrowed/' . $borrowed_book->id);

        $this->assertDeleted('borrowed_books', ["id" => $borrowed_book->id]);
        $response->assertRedirect('/borrowed');
    }

}
