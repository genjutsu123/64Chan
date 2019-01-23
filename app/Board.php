<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'name',
        'message'
    ];
    
    public function posts() {
        return $this->hasMany('App\Post');
    }
}
