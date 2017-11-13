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

    public function CdnMapTax()
    {
        return $this->hasOne(CloudinaryMapping::class,'url','tax_id_image');
    }

    public function CdnMapBli()
    {
        return $this->hasOne(CloudinaryMapping::class,'url','business_license_image');
    }
}
