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
		'po_document',
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

    public function User()
    {
    	return $this->belongsTo(UserPreDefine::class,'id_user','id');
    }

    public function City()
    {
    	return $this->belongsTo('Laravolt\Indonesia\Models\City','id_city','id');
    }

    public function Province()
    {
        return $this->belongsTo('Laravolt\Indonesia\Models\Province','id_province','id');
    }

    public function Unit()
    {
        return $this->belongsTo(Unit::class,'id_unit','id');
    }

    public function Area()
    {
        return $this->belongsTo(Area::class,'id_area','id');
    }

    public function BuyLeadBusinessCategory()
    {
        return $this->hasMany(BuyLeadBusinessCategory::class,'buy_lead_id','id');
    }

    public function Quotation()
    {
        return $this->hasMany(Quotation::class,'id_buy_lead','id');
    }

    public function BuyLeadUser()
    {
        return $this->hasMany(BuyLeadUser::class,'id_buy_lead','id');
    }

    
}
