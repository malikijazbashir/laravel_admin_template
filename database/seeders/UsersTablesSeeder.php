<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'      => 'admin',
        'email'     => 'admin@gmail.com',
        'password'  => Hash::make('admin'),
        'remember_token'=> str_random(10),
        ]);
    }
}
