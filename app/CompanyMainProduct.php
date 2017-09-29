<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyMainProduct extends Model
{
    protected $table = 'company_main_product';

    protected $fillable = [
    	'id_company',
    	'main_product_name',
    	'status'
    ];
}
