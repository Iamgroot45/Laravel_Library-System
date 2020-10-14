<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
        	['book_id'=>'1','reservation_date'=>'2020-09-23','pickup_date'=>'2020-09-24'],
        	['book_id'=>'2','reservation_date'=>'2020-09-24','pickup_date'=>'2020-09-25'],
        	['book_id'=>'3','reservation_date'=>'2020-09-25','pickup_date'=>'2020-09-26'],
        	['book_id'=>'4','reservation_date'=>'2020-09-26','pickup_date'=>'2020-09-27'],
        	['book_id'=>'5','reservation_date'=>'2020-09-27','pickup_date'=>'2020-09-28'],
        ];
        DB::table('book_reservations')->insert($reservations);    }
}
