<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dojo;

class DojoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Add predefined dojo records
        Dojo::create(['name' => 'Fire Dojo']);
        Dojo::create(['name' => 'Water Dojo']);
        Dojo::create(['name' => 'Earth Dojo']);
        Dojo::create(['name' => 'Air Dojo']);
        Dojo::create(['name' => 'Shadow Dojo']);
    }
}
#laravel-auth-starter-project\database\seeders\NinjaSeeder.php
<?php
