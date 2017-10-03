<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revise extends Model
{
    protected $table = 'revise';

    protected $fillable = [
		'id_quotation',
        'id_user',
        'total_price',
        'document',
        'status',
        'city',
        'id_shipping_term',
        'delivery_day',
    ];

    public function User()
    {
        return $this->belongsTo(UserPreDefine::class,'id_user','id');
    }

    public function Quotation()
    {
        return $this->belongsTo(Quotation::class,'id_quotation','id');
    }

    public function ShippingTerm()
    {
        return $this->belongsTo(ShippingTerm::class,'id_shipping_term','id');
    }
}
