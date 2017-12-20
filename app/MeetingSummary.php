<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingSummary extends Model
{
    protected $table = 'meeting_summary';

    protected $fillable = [
    	'id_quotation',
    	'created_by',
    	'title',
    	'subject',
    	'date',
    	'time',
    	'minute_of_meeting',
    	'status',
    ];

    public function User()
    {
        return $this->belongsTo(UserPreDefine::class,'created_by','id');
    }

    public function Quotation()
    {
        return $this->belongsTo(Quotation::class,'id_quotation','id');
    }
    
}
