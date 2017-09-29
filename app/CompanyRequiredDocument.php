<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyRequiredDocument extends Model
{
    protected $table = 'company_required_document';

    protected $fillable = [
    	'id_company',
    	'business_license_image',
    	'tax_id_image',
    	'status'
    ];
}
