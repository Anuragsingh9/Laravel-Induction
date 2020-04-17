<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function phone()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
