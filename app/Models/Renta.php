<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;

    public function peliculas() {
        return $this->belongsTo(Pelicula::class, 'id_pelicula');
    }

    public function usuarios(){
        return $this->belongsTo(user::class,'id_users');
    }
}
