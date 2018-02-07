<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Ad extends Model
{
    use Sluggable;
    protected $table = "ads";
    protected $fillable = ['title','price','currency','description','display_my_number','location_1','location_2','address_id','address_description','status','ad_category_id','shop_id','base_photo_id','photo_1','photo_2','photo_3','photo_4','photo_5','photo_6','photo_7','photo_8','photo_9','photo_10'];

    public function adCategories()
    {
        return $this->belongsTo('App\AdCategory','ad_category_id');
    }
    public function adCategoryDetailConfirmations()
    {
        return  $this->hasMany('App\AdCategoryDetailConfirmation');
    }
    public function adCategoryFeatures()
    {
        return $this->hasMany('App\AdCategoryFeatureConfirmation');
    }
    public function addressId()
    {
        return $this->belongsTo('App\Address','address_id');
    }
    public function userId()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function shopId()
    {
        return $this->belongsTo('App\Shop','shop_id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['title','id']
            ]
        ];
    }
}
