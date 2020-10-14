<?php

namespace Tests\Feature;

use App\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorsTest extends TestCase
{ 
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_authors()
    {
        $authors = factory(Author::class, 15)->create();
        $response = $this->get('/authors');
        $response->assertStatus(200);

    }

    /** @test */
    public function a_user_can_see_single_author()
    {
        $author = factory(Author::class)->create();
        $response = $this->get('/authors/' . $author->id);
        $response->assertSee($author->first_name);

    }
     /** @test */
     public function a_user_can_create_a_author()
     {
        $response = $this->get('/authors/create');
        //$response->assertSee('Create Author');
        $response->assertStatus(200);
        
     }

    /** @test */
     public function a_user_can_store_a_new_author()
     {
        $author = factory(Author::class)->raw();
        $response = $this->post('/authors/' , $author);
        $this->assertDatabaseHas('authors', $author);
        $response->assertRedirect('/authors');
     }

    /** @test */
    public function a_user_can_edit_author(){
        $author = factory(Author::class)->create();
        $response = $this->get('authors/' . $author->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_update_author(){
        $author = factory(Author::class)->create();
        $author_update = factory(Author::class)->raw(); 
        $response = $this->put('authors/' . $author->id, $author_update);

        $this->assertDatabaseMissing('authors', [
            "last_name" => $author->last_name,
            "first_name" => $author->first_name,
            "middle_initial" => $author->middle_initial,
        ]);
        $this->assertDatabaseHas('authors', $author_update);
        $response->assertRedirect('/authors');
    }

     /** @test */
     public function a_user_can_delete_author()
     {
        $author = factory(Author::class)->create();
        $response = $this->delete('authors/' . $author->id);
        $this->assertDeleted('authors', ["id" => $author->id]);
        $response->assertRedirect('/authors');
     }

}
