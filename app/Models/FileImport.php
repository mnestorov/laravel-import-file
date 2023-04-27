<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileImport extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'file_path',
    ];

    public function recordData()
    {
        return $this->hasMany(RecordData::class);
    }
}
