<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyMeetingSchedule extends Model
{
    protected $table = 'company_meeting_schedule';

    protected $fillable = [
        'id_company_assign',
        'id_meeting_schedule',
        'status',
    ];
}