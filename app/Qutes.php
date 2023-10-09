<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qutes extends Model
{
    protected $fillable = ['title'];

    public function quteorder(){
        return $this->hasMany('App\Order','forquted');
    }
    
    public function qutedetail(){
        return $this->belongsToMany('App\Option','quteddeatils')->withPivot('priced','days');
    }
}
