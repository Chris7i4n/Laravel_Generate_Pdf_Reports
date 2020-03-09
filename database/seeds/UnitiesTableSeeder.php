<?php

use Illuminate\Database\Seeder;
use App\User;

class UnitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'christian', 'email' => 'christian.ferreir4@gmail.com', 'perfil' => 0,'password' => bcrypt('123') ]);
    }
}
