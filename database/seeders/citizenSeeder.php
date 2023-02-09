<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Citizen;

class citizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Citizen::create([
            'full_name' => 'Chidiebere chukwudi',
            'gender' => 'male',
            'address' => 'umudike',
            'phone' => '+234810384656',
            'ward_id' => 1,

        ]);

        Citizen::create([
            'full_name' => 'Okegoni Jovi',
            'gender' => 'female',
            'address' => 'okija',
            'phone' => '+23481037465899',
            'ward_id'=> 2

        ]);
    }
}
