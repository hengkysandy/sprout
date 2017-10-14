<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';

    protected $fillable = [
		'section',
		'name',
		'status'
    ];

    public function Division()
    {
    	return $this->hasMany(Division::class,'section_id','id');
    }
}
