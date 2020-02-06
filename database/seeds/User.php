<?php

use Illuminate\Database\Seeder;
use App\Users;
class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'firstname' => 'Mary',
            'lastname' => 'Paller',
        
        ]);
    }
}
