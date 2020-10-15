<?php

namespace Tests\Feature;

use App\BookReservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReservationsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_see_all_reservation()
    {
        $reservations = factory(BookReservation::class, 15)->create();
        $response = $this->get('/reservations');
        $response->assertStatus(200);

    }

    /** @test */
    public function a_user_can_see_single_reservation()
    {
        $reservations = factory(BookReservation::class)->create();
        $response = $this->get('/reservations/' . $reservations->id);
        $response->assertSee($reservations->id);

    }
     /** @test */
     public function a_user_can_create_a_reservation()
     {
        $response = $this->get('/reservations/create');
        $response->assertStatus(200);

     }

    /** @test */
     public function a_user_can_store_a_new_reservation()
     {
        $reservation = factory(BookReservation::class)->raw();
        $response = $this->post('/reservations/' , $reservation);
        $this->assertDatabaseHas('reservations', $reservation);
        $response->assertRedirect('/reservations');
     }

    /** @test */
    public function a_user_can_edit_reservation(){
        $reservation = factory(BookReservation::class)->create();
        $response = $this->get('reservations/' . $reservation->id . '/edit');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_update_reservation(){
        $reservation = factory(BookReservation::class)->create();
        $Reservation_update = factory(BookReservation::class)->raw(); 
        $response = $this->put('reservations/' . $reservation->id, $Reservation_update);

        $this->assertDatabaseMissing('reservations', [
            'book_id'=>$reservation->book_id,
            'reservation_date'=>$reservation->reservations_date,
            'pickup_date'=>$reservation->pickup_date
        ]);
        $this->assertDatabaseHas('reservations', $Reservation_update);
        $response->assertRedirect('/reservations');
    }

     /** @test */
     public function a_user_can_delete_reservation()
     {
        $reservation = factory(BookReservation::class)->create();
        $response = $this->delete('reservations/' . $reservation->id);
        $this->assertDeleted('reservations', ["id" => $reservation->id]);
        $response->assertRedirect('/reservations');
     }
}
