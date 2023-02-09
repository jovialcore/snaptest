<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create([
            'name' => 'Abia',
           
        ]);

        State::create([
            'name' => 'Lagos',
        ]);
    }
}
