<?php

use Illuminate\Database\Seeder;

use App\Borrower;
class BorrowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $borrower = Borrower::create([
            'user_id' => '1',
        	'last_name' => 'Lastname',
        	'first_name' => 'Firstname',
        	'middle_initial' => 'M',
        	'contact_number' => '09090909099',
        	'email_address' => 'email@seed.com',
            'purpose' => 'return'  
        ]);
    }
}
