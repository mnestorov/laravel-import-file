<?php

namespace App\Repositories;

use App\Models\RecordData;

class EloquentImportedRecordRepository implements ImportedRecordRepositoryInterface
{
    public function updateOrCreate(array $attributes, array $data): RecordData
    {
        return RecordData::updateOrCreate($attributes, $data);
    }
}
