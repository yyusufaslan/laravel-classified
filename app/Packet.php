<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Packet extends Model
{
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
    public function ads()
    {
        return $this->hasMany('App\Ad');
    }

}
