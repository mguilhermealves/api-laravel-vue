<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcos Guilherme',
            'email' => 'marcos.guilherme@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
