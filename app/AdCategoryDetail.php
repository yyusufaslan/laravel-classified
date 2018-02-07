<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdCategoryDetail extends Model
{
    public function adCategoryId()
    {
        return $this->belongsTo('App\AdCategory','category_id');
    }
    public function adCategoryLanguageId()
    {
        return $this->belongsTo('App\AdCategoryLanguage','language_id');
    }
    public function adCategoryDetailConfirmations()
    {
        return $this->hasMany('App\AdCategoryDetailConfirmation');
    }


}
