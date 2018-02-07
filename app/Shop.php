<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Shop extends Model
{

    use Sluggable;
    protected $table = "shops";
    protected $fillable = [
        'title' , 'description','photo','status'
    ];
    public function packetId()
    {
        return $this->belongsTo('App\Packet','packet_id');
    }

    public function adCategoryId()
    {
        return $this->belongsTo('App\AdCategory','category_id');
    }

    public function userId()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function ads()
    {
        return $this->hasMany('App\Ad');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
