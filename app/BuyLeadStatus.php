<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyLeadStatus extends Model
{
    protected $table = 'buy_lead_status';

    protected $fillable = [
		'id_buy_lead',
		'id_status',
		'status',
    ];

    public function Status()
    {
    	return $this->belongsTo(Status::class,'id_status','id');
    }
}
