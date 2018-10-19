<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    //关联模型
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
