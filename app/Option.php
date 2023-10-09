<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['formeal','title','descr','price','countnum'];
    protected $cast = [
        'finalone' => 'date:hh;mm'
    ];
    public function plantes(){
        return $this->belongsToMany('App\Plates','mealplates');
    }
    public function meals(){
        return $this->belongsTo('App\Meals','formeal');
    }
    public function qutesd(){
        return $this->belongsToMany('App\Qutes','quteddeatils')->withPivot();
    }
}
