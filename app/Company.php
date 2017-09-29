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

    
}
