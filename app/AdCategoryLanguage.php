<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategoryLanguage extends Model
{


    public function adCategories()
    {
        return $this->hasMany('App\AdCategory');
    }
    public function adCategoryFeatures()
    {
        return $this->hasMany('App\AdCategoryFeature');
    }
    public function adCategoryDetailLanguages()
    {
        return $this->hasMany('App\AdCategoryDetail');
    }

}
