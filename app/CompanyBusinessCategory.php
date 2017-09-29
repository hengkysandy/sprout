<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyBusinessCategory extends Model
{
    protected $table = 'company_business_category';

    protected $fillable = [
    	'id_company',
		'id_business_category',
		'status'
    ];
}
