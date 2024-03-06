<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefTimezone extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_tz_label',
        'ref_tz_value',
        'ref_tz_offset'
    ];

}
