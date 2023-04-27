<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FileImport;

class FileImportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileImports = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15,
        ];

        foreach ($fileImports as $id) {
            FileImport::firstOrCreate(['id' => $id]);
        }
    }
}
