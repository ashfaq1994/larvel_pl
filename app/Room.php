<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    function RoomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function gallery()
    {   
      return $this->belongsToMany(Gallery::class, 'image','room_id','gallery_id')->withTimestamps();
    }


    public function setNameAttribute($value)
    {
        $this->attributes['name']=$value;
        $this->attributes['slug']=str_slug($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
