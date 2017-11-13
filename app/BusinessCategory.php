<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCategory extends Model
{
    protected $table = 'business_category';

    protected $fillable = [
    	'id_section',
		'id_group_division',
		'status'
    ];

    public function Section()
    {
        return $this->belongsTo(Section::class,'id_section','id');
    }
}
