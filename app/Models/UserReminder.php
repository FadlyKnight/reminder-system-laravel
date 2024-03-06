<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ref_reminder_id',
        'ref_timezone_id',
        'last_sent_at',
        'status',
    ];
}
