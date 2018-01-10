<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingSchedule extends Model
{
    protected $table = 'meeting_schedule';

    protected $fillable = [
        'id_quotation',
        'id_user',
        'send_to',
        'meeting_type',
        'recipient_role',
        'subject',
        'description',
        'date',
        'time',
        'place',
        'status',
    ];
}