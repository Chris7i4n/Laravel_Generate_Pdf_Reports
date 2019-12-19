<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'yasmin', 'email' => 'yasminguimaraes13@hotmail.com', 'perfil' => 1,'password' => bcrypt('123') ]);
        // $this->call(UsersTableSeeder::class);
    }
}
