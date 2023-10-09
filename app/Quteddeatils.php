<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quteddeatils extends Model
{
    
    public function qute(){
        return $this->belongsTo('App\Qutes','forqute');
    }
    public function option(){
        return $this->belongsTo('App\Option','formealop');
    }
}
