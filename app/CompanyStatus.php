<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyStatus extends Model
{
	protected $table = 'company_status';

    protected $fillable = [
		'id_company_by',
		'id_company_for',
		'id_status',
		'status',
    ];

    public function Status()
    {
        return $this->belongsTo(Status::class,'id_status','id');
    }

    
}
