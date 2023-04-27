<?php

namespace App\Repositories;

use App\Models\RecordData;

interface ImportedRecordRepositoryInterface
{
    public function updateOrCreate(array $attributes, array $data): RecordData;
}


