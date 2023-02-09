<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LGA;

class lgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LGA::create([
            'name' => 'Ikeagwu Local Government',
            'state_id' => '1',
        ]);

        LGA::create([
            'name' => 'ibene Local Government',
            'state_id' => '2',
        ]);
    }
}
