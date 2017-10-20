<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeetingSchedule extends Model
{
    protected $table = 'user_meeting_schedule';

    protected $fillable = [
        'id_user_assigned',
        'id_meeting_schedule',
        'status',
    ];
}