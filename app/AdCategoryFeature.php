<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategoryFeature extends Model
{
    public function adCategoryFeatureId()
    {
        return $this->belongsTo('App\AdCategoryLanguage','language_id');
    }
    public function adCategoryId()
    {
        return $this->belongsTo('App\AdCategory','ad_category_id');
    }
    public function adCategoryFeatureConfirmations()
    {
        return $this->hasMany('App\AdCategoryFeatureConfirmation');
    }
}
