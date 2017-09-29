<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterestedProgram extends Model
{
    protected $table = 'interested_program';

    protected $fillable = [
    	'program_name',
    	'status'
    ];
}
