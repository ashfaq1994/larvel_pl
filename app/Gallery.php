<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];


    public function room()
    {
        return $this->belongsToMany(Room::class, 'image','room_id','gallery_id');
    }
}
