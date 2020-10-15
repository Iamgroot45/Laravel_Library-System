<?php

namespace Tests\Feature;
use App\Staff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaffTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function staff_show_all(){
        $staff = factory(Staff::class, 5)->create();

        $response = $this->get('staff');

        $response->assertStatus(200);
    }

    /** @test */
    public function staff_show_one(){
        $staff = factory(Staff::class)->create();

        $response = $this->get('staff/' . $staff->id);

        $response->assertStatus(200);
    }

    /** @test */
    public function staff_create(){
        $response = $this->get('staff/create');

        $response->assertStatus(200);
    }

    /** @test */
    public function staff_store(){
        $staff = factory(Staff::class)->raw();

        $response = $this->post('staff', $staff);

        $this->assertDatabaseHas('staff', $staff);
        $response->assertRedirect('/staff');
    }

     /** @test */
    public function staff_edit(){
        $staff = factory(Staff::class)->create();

        $response = $this->get('staff/' . $staff->id . '/edit');

        $response->assertStatus(200);
    }

    /** @test */
    public function staff_update(){
        $staff = factory(Staff::class)->create();
        $staff_update_values = factory(Staff::class)->raw([
            'user_id' => $staff->id
        ]);

        $response = $this->put('staff/' . $staff->id, $staff_update_values);

        $this->assertDatabaseMissing('staff', [
            "last_name" => $staff->last_name,
            "first_name" => $staff->first_name,
            "middle_initial" => $staff->middle_initial,
            "email" => $staff->email,
            "position" => $staff->position,
            "area_assigned" => $staff->area_assigned
        ]);
        $this->assertDatabaseHas('staff', $staff_update_values);
        $response->assertRedirect('/staff');
    }

    /** @test */
    public function staff_destroy(){
        $staff = factory(Staff::class)->create();

        $response = $this->delete('staff/' . $staff->id);

        $this->assertDeleted('staff', ["id" => $staff->id]);
        $response->assertRedirect('/staff');
    }
}
