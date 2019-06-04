<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $guarded = [];
    //
   public function room()
   {
      return $this->hasMany(Room::class);
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
