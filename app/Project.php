<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', 'comment'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function requirements(){
        return $this->hasMany('App\Requirement');
    }
}
