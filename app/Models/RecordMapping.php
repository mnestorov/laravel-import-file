<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_range',
        'end_range',
        'length',
        'description',
        'record_type_id',
    ];

    public function recordType()
    {
        return $this->belongsTo(RecordType::class);
    }
}
