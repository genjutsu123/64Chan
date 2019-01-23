<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'board_id',
        'title',
        'message', 
        'image'
    ];

    public function board() {
        return $this->belongsTo('App\Board');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
