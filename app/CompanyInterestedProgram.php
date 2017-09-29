<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInterestedProgram extends Model
{
    protected $table = 'company_interested_program';

    protected $fillable = [
    	'id_company',
		'id_interested_program',
		'status'
    ];
}
