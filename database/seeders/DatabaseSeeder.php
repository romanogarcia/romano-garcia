<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Facility;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            FacilitiesSeeder::class,
        ]);
        
    }
}
