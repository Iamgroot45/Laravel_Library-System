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
            ['ID'=>'1','date'=>'2020-10-2','time_in'=>'2020-10-2 10:30:00','time_out'=>'2020-10-2 10:35:00']
            ['ID'=>'2','date'=>'2020-10-3','time_in'=>'2020-10-3 10:35:00','time_out'=>'2020-10-3 10:40:00']
            ['ID'=>'3','date'=>'2020-10-4','time_in'=>'2020-10-4 10:40:00','time_out'=>'2020-10-4 10:50:00']
            ['ID'=>'4','date'=>'2020-10-5','time_in'=>'2020-10-5 10:50:00','time_out'=>'2020-10-5 11:00:00']
            ['ID'=>'5','date'=>'2020-10-6','time_in'=>'2020-10-6 11:00:00','time_out'=>'2020-10-6 11:05:00]
           





        ];

        DB::table('daily_time_records')->insert($dailytimerecords); 
    }
}