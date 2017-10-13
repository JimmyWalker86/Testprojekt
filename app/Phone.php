<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    protected $fillable = ['number'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
