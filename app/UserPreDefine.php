<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPreDefine extends Model
{
    protected $table = 'user';

    protected $fillable = [
		'id_company',
		'email',
		'first_name',
		'last_name',
		'username',
		'job_title',
		'photo_image',
		'old_password',
		'new_password',
		'status',
    ];

    public function Company()
    {
    	return $this->belongsTo(Company::class,'id_company','id');
    }

    public function UserRole()
    {
    	return $this->hasOne(UserRole::class,'user_id','id');
    }
}
