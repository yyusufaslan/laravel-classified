<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AdCategory extends Model
{
    use Sluggable;
    protected $table = "ad_categories";
    protected $fillable = [
        'body' , 'icon'
    ];
    public  function ads()
    {
        return $this->hasMany('App\Ad');
    }
    public function parents()
    {
        return $this->belongsTo('App\AdCategory');
    }
    public function children()
    {
        return $this->hasMany('App\AdCategory','ad_category_id','id');
    }
    public function adCategoryLanguageId()
    {
        return $this->belongsTo('App\AdCategoryLanguage','ad_category_language_id');
    }
    public function adCategoryDetails()
    {
        return $this->hasMany('App\AdCategoryDetail');
    }
    public function adCategoryFeatures()
    {
        return $this->hasMany('App\AdCategoryFeature');
    }
    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['body']
            ]
        ];
    }
}

