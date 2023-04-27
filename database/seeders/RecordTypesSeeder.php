<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RecordType;

class RecordTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recordTypes = [
            'DT',
            'P1',
            'A2',
            'A1',
            'P2',
            'DR',
            'CT',
            'FT',
            'F2',
            'TH',
            'BH',
            'AD',
            'TT',
            'LG',
            'CK',
        ];

        foreach ($recordTypes as $type) {
            RecordType::firstOrCreate(['type' => $type]);
        }
    }
}
