<?php

use Illuminate\Database\Seeder;

class DailyTimeRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dailyrecords = [
            ['ID'=>'1','date'=>'2020-09-23','time_in'=>'2020-09-24'],
        	['book_id'=>'2','reservation_date'=>'2020-09-24','pickup_date'=>'2020-09-25'],
        	['book_id'=>'3','reservation_date'=>'2020-09-25','pickup_date'=>'2020-09-26'],
        	['book_id'=>'4','reservation_date'=>'2020-09-26','pickup_date'=>'2020-09-27'],
        	['book_id'=>'5','reservation_date'=>'2020-09-27','pickup_date'=>'2020-09-28'],

            [''=>'1','reservation_date'=>'2020-09-23','pickup_date'=>'2020-09-24'],





        ];
        DB::table('daily_time_records')->insert($dailyrecords);    }
}