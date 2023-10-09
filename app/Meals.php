<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    public function option(){
        return $this->hasMany('App\Option','formeal');
    }
}
