<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\BloodBank::class, 10)->create();
        factory(App\Recipient::class, 10)->create();      
        factory(App\Donor::class, 10)->create();             
    }
}
