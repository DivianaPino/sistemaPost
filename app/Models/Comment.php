<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     //Relación uno a muchos con INVERSA CON POST: Un comentario pertenece a un post
    public function post()
    {
      return $this->belongsTo('App\Models\Post');
    }

     //Relación uno a muchos con INVERSA CON USER: Un comentario pertenece a un usuario
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
