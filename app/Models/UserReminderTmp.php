<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReminderTmp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_reminder_id',
        'status'
    ];

    public function userReminder(){
        return $this->belongsTo(UserReminder::class, 'user_reminder_id', 'id');
    }

}
