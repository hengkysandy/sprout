<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
		'division_id',
		'name',
		'description',
		'status'
    ];

    public function Division()
    {
        return $this->belongsTo(Division::class,'division_id','id');
    }
}
