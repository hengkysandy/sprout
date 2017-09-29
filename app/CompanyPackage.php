<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPackage extends Model
{
    protected $table = 'company_package';

    protected $fillable = [
    	'id_company',
    	'id_package',
        'status',
    	'year_duration',
    	'expired_date',
    	'insert_from_profile',
    ];

    public function Company()
    {
    	return $this->belongsTo(Company::class,'id_company','id');
    }

    public function Package()
    {
	   return $this->belongsTo(Package::class,'id_package','id');
    }
}
