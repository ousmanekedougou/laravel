<?php

use App\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Admin::create([
            'name'   => 'diallo',
            'prenom' => 'ousmane',
            'email'  => 'email@gmail.com',
            'password' => '$2y$10$NIukK99Qe/oJXCgf9gEiS.kWbVUmPfDw7CafxkGxZ2qJ1PUh.PekG', //password
            'phone' => '778740935',
            'images' => 'image'

        ]);
    }
}
