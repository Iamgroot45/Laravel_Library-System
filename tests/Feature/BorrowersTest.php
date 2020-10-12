<?php

namespace Tests\Feature;

use App\Borrower;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BorrowersTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_borrowers()
    {
        $borrowers = factory(Borrower::class, 15)->create();
        $response = $this->get('/borrowers');
        $response->assertStatus(200);

    }

    /** @test */
    public function a_user_can_see_single_borrower()
    {
        $borrower = factory(Borrower::class)->create();
        $response = $this->get('/borrowers/' . $borrower->id);
        $response->assertSee($borrower->first_name);

    }
     /** @test */
     public function a_user_can_create_a_borrower()
     {
        $response = $this->get('/borrowers/create');
        //$response->assertSee('Create Borrower');
        $response->assertStatus(200);

     }

    /** @test */
     public function a_user_can_store_a_new_borrower()
     {
        // $this->withoutExceptionHandling();
        $form_fields = factory(Borrower::class)->raw();
        $response = $this->post('/borrowers' , $form_fields);
        $this->assertDatabaseHas('borrowers', $form_fields);
        $response->assertRedirect('/borrowers');
     }

     /** @test */
    public function a_user_can_edit_borrower(){
        $borrower = factory(Borrower::class)->create();
        $response = $this->get('borrowers/' . $borrower->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_update_borrower(){
        // $this->withoutExceptionHandling();
        $borrower = factory(Borrower::class)->create();
        $borrower_update = factory(Borrower::class)->raw(['user_id'=>$borrower->id]); 
        $response = $this->put('borrowers/' . $borrower->id, $borrower_update);

        $this->assertDatabaseMissing('borrowers', [
            "user_id" => $borrower->user_id,
            "first_name" => $borrower->first_name,
            "last_name" => $borrower->last_name,
            "middle_initial" => $borrower->middle_name,
            "contact_number" => $borrower->contact_number,
            "email_address" =>  $borrower->email_address,
            "purpose" => $borrower->purpose
        ]);
        $this->assertDatabaseHas('borrowers', $borrower_update);
        $response->assertRedirect('/borrowers');
    }

     /** @test */
     public function a_user_can_delete_borrower()
     {
        $borrower = factory(Borrower::class)->create();
        $response = $this->delete('borrowers/' . $borrower->id);
        $this->assertDeleted('borrowers', ["id" => $borrower->id]);
        $response->assertRedirect('/borrowers');
     }

    
}
