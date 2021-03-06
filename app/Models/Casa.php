<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;

    public function bairro()
    {
        return $this->belongsTo(Bairro::class);
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }
}
