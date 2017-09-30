<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotation';

    protected $fillable = [
		'id_buy_lead',
		'id_user',
		'id_unit',
		'id_shipping_term',
		'city',
		'amount',
		'total_price',
		'delivery_day',
		'document',
		'status',
    ];

    public function ShippingTerm()
    {
    	return $this->belongsTo(ShippingTerm::class,'id_shipping_item','id');
    }
}
