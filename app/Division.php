<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'division';

    protected $fillable = [
		'section_id',
		'name',
		'description',
		'status'
    ];

    public function Group()
    {
    	return $this->hasMany(Group::class,'division_id','id');
    }
}
