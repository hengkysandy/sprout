<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CloudinaryMapping extends Model
{
    protected $table = 'cloudinary_mapping';

    protected $fillable = [
    	'idPrimary',
        'url',
        'original_filename'
    ];

    
}
