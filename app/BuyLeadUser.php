<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyLeadUser extends Model
{
    protected $table = 'buy_lead_user';

    protected $fillable = [
		'id_buy_lead',
		'id_user',
		'linked_for',
		'status',
    ];
}
