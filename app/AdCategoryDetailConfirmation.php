<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategoryDetailConfirmation extends Model
{
    public function adCategoryDetailId()
    {
        return $this->belongsTo('App\AdCategoryDetail','detail_id');
    }
    public function adId()
    {
        return $this->belongsTo('App\Ad','ad_id');
    }
}
