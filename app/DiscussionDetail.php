<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionDetail extends Model
{
    protected $table = 'discussion_detail';

    protected $fillable = [
		'user_id',
        'discussion_id',
        'message',
    ];

    public function Discussion()
    {
        return $this->belongsTo(Discussion::class,'discussion_id','id');
    }

    public function User()
    {
        return $this->belongsTo(UserPreDefine::class,'user_id','id');
    }

    
}
