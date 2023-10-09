<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plates extends Model
{
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function options(){
        //return $this->belongsToMany('App\Options','forpaltes')->withTimestamps();
        return $this->belongsToMany('App\Option','mealplates','forpaltes');
    }
}
