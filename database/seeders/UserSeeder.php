<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'username' => 'johndoe',
            'email' => 'john@gmail.com',
            'password' => Hash::make('pass123')
        ]);
        
        User::create([
            'name' => 'Rick Riggs',
            'username' => 'rickriggs',
            'email' => 'rick@gmail.com',
            'password' => Hash::make('pass123')
        ]);
        
        User::create([
            'name' => 'Mary Smith',
            'username' => 'marysmith',
            'email' => 'mary@gmail.com',
            'password' => Hash::make('pass123')
        ]);
        
        User::create([
            'name' => 'Rex Smith',
            'username' => 'rexsmith',
            'email' => 'rex@gmail.com',
            'password' => Hash::make('pass123')
        ]);
        
        User::create([
            'name' => 'Frank Sinatra',
            'username' => 'franksinatra',
            'email' => 'frank@gmail.com',
            'password' => Hash::make('pass123')
        ]);
    }
}
