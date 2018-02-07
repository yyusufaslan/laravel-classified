<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategoryFeatureConfirmation extends Model
{
    public function adCategoryFeatureId()
    {
        return $this->belongsTo('App\AdCategoryFeature','ad_category_feature_id');
    }
    public function adId()
    {
        return $this->belongsTo('App\Ad','ad_id');
    }
}
