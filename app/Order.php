<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer(){
        return $this->belongsTo('App\customer','forcustom');
    }
    public function qutedetails(){
        return $this->belongsTo('App\Quteddeatils','forquted');
    }
    public function option(){
        return $this->belongsTo('App\Option','foroptionml');
    }
}
