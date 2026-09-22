<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PidExtraction extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
        'ocr_text',
        'equipment',
    ];

    protected $casts = [
        'equipment' => 'array',
    ];
}
