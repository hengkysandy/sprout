<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingTerm extends Model
{
    protected $table = 'shipping_term';

    protected $fillable = [
    	'name',
    	'description',
    	'status'
    ];
}
