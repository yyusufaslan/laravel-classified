<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }
}
