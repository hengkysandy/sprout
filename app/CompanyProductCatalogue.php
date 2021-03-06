<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProductCatalogue extends Model
{
    protected $table = 'company_product_catalogue';

    protected $fillable = [
    	'id_company',
    	'product_catalogue_image',
    ];

    public function CdnMap()
    {
        return $this->hasOne(CloudinaryMapping::class,'url','product_catalogue_image');
    }

}
