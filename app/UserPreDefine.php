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
}
