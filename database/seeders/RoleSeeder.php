<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'user_id' => rand(1,3),
        ]);

        Role::create([
            'name' => 'Manager',
            'user_id' => rand(1,3),
        ]);
        
        Role::create([
            'name' => 'HR',
            'user_id' => rand(1,3),
        ]);
    }
}
