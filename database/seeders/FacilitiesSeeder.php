<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'name' => 'Bureau of Fire',
            'user_id' => rand(1,5),
            'address' => '123 Main Ave',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zip' => '44221',
            'contact'=>'123-444-5555'
        ]);
        Facility::create([
            'name' => 'Laboratory',
            'user_id' => rand(1,5),
            'address' => '123 Main Ave',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zip' => '44221',
            'contact'=>'123-444-5555'
        ]);
        Facility::create([
            'name' => 'Finance',
            'user_id' => rand(1,5),
            'address' => '123 Main Ave',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zip' => '44221',
            'contact'=>'123-444-5555'
        ]);
    }
}
