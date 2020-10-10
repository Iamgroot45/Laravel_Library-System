<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $authors =[
        	['last_name'=>'Ben','first_name'=>'Ten', 'middle_initial'=>'N'],
        	['last_name'=>'Ben 1','first_name'=>'Ten 1', 'middle_initial'=>'N'],
        	['last_name'=>'Ben 2','first_name'=>'Ten 2', 'middle_initial'=>'N'],
        	['last_name'=>'Ben 3','first_name'=>'Ten 3', 'middle_initial'=>'N'],
        	['last_name'=>'Ben 4','first_name'=>'Ten 4', 'middle_initial'=>'N'],
        ];
        DB::table('authors')->insert($authors);
    }
}
