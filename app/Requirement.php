<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = [
        'name', 'impact', 'estimated_time', 'priority', 'details'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function project(){
        return $this->belongsToMany('App\Project');
    }

    public function items(){
        return $this->hasMany('App\Item');
    }
}
