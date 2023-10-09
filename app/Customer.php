<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    public function orderc(){
        return $this->hasMany('App\Order','forcustom');
    }
}
