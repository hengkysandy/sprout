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
    //ini ada 2 fungsi yang aneh, terutama section ini, cari tahu dimana dia error, lalu di hapus fungsi ini
    // public function Section()
    // {
    // 	return $this->belongsTo(Section::class,'id_business_category','id');
    // }

    public function BusinessCategory()
    {
        return $this->belongsTo(BusinessCategory::class,'id_business_category','id');
    }

    public function Company()
    {
        return $this->belongsTo(Company::class,'id_company','id');
    }

    
}
