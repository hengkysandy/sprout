<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table = 'company';

    protected $fillable = [
		'city_id',
		'province_id',
    	'name',
		'tagline',
		'logo_image',
		'email',
		'password',
		'address',
		'phone',
		'contact_name',
		'mobile_number',
		'tax_type',
		'business_entity',
		'status'
    ];

    public function City()
    {
    	return $this->belongsTo('Laravolt\Indonesia\Models\City','city_id','id');
    }

    public function CompanyStatusBy()
    {
    	return $this->hasMany(CompanyStatus::class,'id_company_by','id');
    }

    public function CompanyStatusFor()
    {
    	return $this->hasMany(CompanyStatus::class,'id_company_For','id');
    }

    
}
