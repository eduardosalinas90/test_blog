<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "Tags";
    protected $fillable = ['name'];
    protected $visible = ['name'];

    public function articles(){

        return $this->belongsToMany('App\Article')->withTimestamps();


    }
}
