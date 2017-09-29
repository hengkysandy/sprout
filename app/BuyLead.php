<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyLead extends Model
{
    protected $table = 'buy_lead';

    protected $fillable = [
		'buy_lead_code',
		'admin_id',
		'id_user',
		'id_city',
		'id_province',
		'id_unit',
		'id_shipping_item',
		'id_area',
		'item',
		'amount',
		'short_description',
		'total_price',
		'payment_term',
		'closed_date',
		'delivery_day',
		'document',
		'approved_vendor_only',
		'status',
    ];

    public function ShippingTerm()
    {
    	return $this->belongsTo(ShippingTerm::class,'id_shipping_item','id');
    }

    public function BuyLeadStatus()
    {
    	return $this->hasOne(BuyLeadStatus::class,'id_buy_lead','id');
    }
}
