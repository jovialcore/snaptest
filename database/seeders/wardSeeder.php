<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ward;

class wardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ward::create([
            'name' => 'Ugwobo',
            'lga_id' => '1',
        ]);

        Ward::create([
            'name' => 'Ikpuno ',
            'lga_id' => '2',

        ]);
    }
}
