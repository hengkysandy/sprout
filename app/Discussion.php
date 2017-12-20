<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $table = 'discussion';

    protected $fillable = [
		'id_buy_lead',
        'id_user',
        'message',
        'status',
    ];

    public function User()
    {
        return $this->belongsTo(UserPreDefine::class,'id_user','id');
    }

    public function BuyLead()
    {
        return $this->belongsTo(BuyLead::class,'id_buy_lead','id');
    }

    public function DiscussionDetail()
    {
        return $this->hasMany(DiscussionDetail::class,'discussion_id','id');
    }

   
}
