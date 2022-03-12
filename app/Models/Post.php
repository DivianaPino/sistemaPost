<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    //Relación uno a muchos con INVERSA CON USER: Un post pertenecen a un usuario
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
    
    //Relación uno a muchos con COMMENTS: Un post puede tener varios comentarios
    public function comments()
    {
      return $this->hasMany('App\Models\Comment');
    } 
  
}