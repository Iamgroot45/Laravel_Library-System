<?php

namespace Tests\Feature;

use App\DailyTimeRecords;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DailyTimeRecordsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_dailytimerecords()
    {
        $dailytimerecords = factory(DailyTimeRecords::class, 15)->create();
        $response = $this->get('/dailytimerecords');
        $response->assertStatus(200);

    }

    /** @test */
    public function a_user_can_see_single_dailytimerecords()
    {
        $dailytimerecords = factory(DailyTimeRecords::class)->create();
        $response = $this->get('/dailytimerecords/' . $dailytimerecords->id);
        $response->assertSee($dailytimerecords->id);

    }
     /** @test */
     public function a_user_can_create_a_dailytimerecords()
     {
        $response = $this->get('/dailytimerecords/create');
        $response->assertStatus(200);

     }

    /** @test */
     public function a_user_can_store_a_new_dailytimerecords()
     {
        $dailytimerecords = factory(DailyTimeRecords::class)->raw();
        $response = $this->post('/dailytimerecords/' , $dailytimerecords);
        $this->assertDatabaseHas('dailytimerecords', $dailytimerecords);
        $response->assertRedirect('/dailytimerecords');
     }

    /** @test */
    public function a_user_can_edit_dailytimerecords(){
        $dailytimerecords = factory(DailyTimeRecords::class)->create();
        $response = $this->get('dailytimerecords/' . $dailytimerecords->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_update_dailytimerecords(){
        $dailytimerecords = factory(DailyTimeRecords::class)->create();
        $dailytimerecords_update = factory(DailyTimeRecords::class)->raw(); 
        $response = $this->put('dailytimerecords/' . $dailytimerecords->id, $dailytimerecords_update);

        $this->assertDatabaseMissing('dailytimerecords', [
            'ID' => $dailytimerecords->id,
            'staff_id' => $dailytimerecords->staff_id,
            'time_in' => $dailytimerecords->time_in,
            'time_out' => $dailytimerecords->time_out,
            'date' => $dailytimerecords->date
        ]);
        $this->assertDatabaseHas('dailytimerecords', $dailytimerecords_update);
        $response->assertRedirect('/dailytimerecords');
    }

     /** @test */
     public function a_user_can_delete_dailytimerecords()
     {
        $dailytimerecords = factory(DailyTimeRecords::class)->create();
        $response = $this->delete('dailytimerecords/' . $dailytimerecords->id);
        $this->assertDeleted('dailytimerecords', ["id" => $dailytimerecords->id]);
        $response->assertRedirect('/dailytimerecords');
     }
}