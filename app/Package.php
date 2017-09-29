<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';

    protected $fillable = [
    	'name',
    	'validity_period',
    	'super_user_account',
    	'administrator_account',
    	'manager_account',
    	'staff_account',
    	'status'
    ];
}
