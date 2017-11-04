<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_role';
    
    protected $fillable = [
		'role_id',
		'user_id',
		'status'
    ];

    public function Role()
    {
    	return $this->belongsTo(Role::class,'role_id','id');
    }
}
