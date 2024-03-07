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
        'timezone',
        'occur_date',
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function refReminder(){
        return $this->belongsTo(RefReminder::class, 'ref_reminder_id', 'id');
    }
}
