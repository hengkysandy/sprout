<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyLeadBusinessCategory extends Model
{
    protected $table = 'buy_lead_business_category';

    protected $fillable = [
		'buy_lead_id',
		'business_category_id',
		'status',
    ];
}
