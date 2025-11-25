<?php

namespace Database\Seeders;

use App\Models\Dht22;
use App\Models\Max;
use App\Models\Servo;
use App\Models\SmartHome;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Dht22::create();
        Max::create();
        Servo::create();
        $data = [
            ["objek" => "kipas angin","pin" => 5],
            ["objek" => "Wifi","pin" => 0],
            ["objek" => "Lampu teras","pin" => 2],
            ["objek" => "Lampu dapur","pin" => 14],
            ["objek" => "PlayStation","pin" => 12],
            ["objek" => "tv","pin" => 15],
        ];
        foreach($data as $d){
            SmartHome::create($d);
        }
    }
}
