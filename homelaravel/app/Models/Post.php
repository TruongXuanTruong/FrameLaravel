<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;


    protected $fillabe = ['title','content','user_id','votes'];
    function FeaturedImages(){
        return $this->hasOne('App\FeaturedImages');
    }
    function user(){
        return $this->belongsTo('App\User');
    }
}
