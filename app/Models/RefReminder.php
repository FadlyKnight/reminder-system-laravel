<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_rmndr_name',
        'ref_rmndr_type',
        'ref_rmndr_message',
    ];
}
