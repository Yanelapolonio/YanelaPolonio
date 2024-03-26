<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;
    public function usuarios (){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
