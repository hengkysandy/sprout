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
    	return $this->belongsTo(ShippingTerm::class,'id_shipping_term','id');
    }

    public function QuotationStatus()
    {
    	return $this->hasOne(QuotationStatus::class,'id_quotation','id');
    }

    public function BuyLead()
    {
    	return $this->belongsTo(BuyLead::class,'id_buy_lead','id');
    }

    public function User()
    {
        return $this->belongsTo(UserPreDefine::class,'id_user','id');
    }

    public function Unit()
    {
        return $this->belongsTo(Unit::class,'id_unit','id');
    }

   
}
