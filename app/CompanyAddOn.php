<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAddOn extends Model
{
	protected $table = 'company_add_on';

    protected $fillable = [
		'company_id',
		'add_on_id',
    	'request_from',
        'expired_date',
		'quantity',
		'status',
    ];

    public function AddOn()
    {
        return $this->belongsTo(AddOn::class,'add_on_id','id');
    }

    public function Company()
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }

    
}
