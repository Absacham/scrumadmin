<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'details', 'pessimistic', 'estimated', 'optimistic'
    ];

    public function requirement(){
        return $this->belongsToMany('App\Requirement');
    }
}
