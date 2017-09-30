<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotationStatus extends Model
{
    protected $table = 'quotation_status';

    protected $fillable = [
		'id_quotation',
		'id_status',
		'status',
    ];

    public function Status()
    {
    	return $this->belongsTo(Status::class,'id_status','id');
    }
}
