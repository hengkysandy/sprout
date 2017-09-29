<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyLeadCompany extends Model
{
    protected $table = 'buy_lead_company';

    protected $fillable = [
		'id_buy_lead',
		'id_company',
		'status',
    ];
}
