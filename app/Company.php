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
        'status',
        'zip_code',
    ];

    public function City()
    {
    	return $this->belongsTo('Laravolt\Indonesia\Models\City','city_id','id');
    }

    public function Province()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\Province','province_id','id');
    }

    public function CompanyStatusBy()
    {
    	return $this->hasMany(CompanyStatus::class,'id_company_by','id');
    }

    public function CompanyStatusFor()
    {
    	return $this->hasMany(CompanyStatus::class,'id_company_for','id');
    }

    public function CompanyBusinessCategory()
    {
        return $this->hasMany(CompanyBusinessCategory::class,'id_company','id');
    }

    public function CompanyMainProduct()
    {
        return $this->hasMany(CompanyMainProduct::class,'id_company','id');
    }

    public function CompanyInterestedProgram()
    {
        return $this->hasMany(CompanyInterestedProgram::class,'id_company','id');
    }

    public function CompanyPackage()
    {
        return $this->hasMany(CompanyPackage::class,'id_company','id');
    }

    public function CompanyProductCatalogue()
    {
        return $this->hasMany(CompanyProductCatalogue::class,'id_company','id');
    }

    public function CompanyRequiredDocument()
    {
        return $this->hasMany(CompanyRequiredDocument::class,'id_company','id');
    }


    public function Certificate()
    {
        return $this->hasMany(Certificate::class,'id_company','id');
    }

    

    

    
}
