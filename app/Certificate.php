<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificate';

    protected $fillable = [
    	'id_company',
		'certificate_image',
		'status'
    ];

    public function CdnMap()
    {
        return $this->hasOne(CloudinaryMapping::class,'url','certificate_image');
    }
}
