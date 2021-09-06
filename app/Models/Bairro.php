<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;
//todo: recarga *150*5_25_2_64138#
//7

    public function bairros() {
        return $this->belongsToMany(Bairro::class, 'bairros', 'vizinho_id', 'bairro_id');
    }

//    public function bairross() {
//        return $this->belongsToMany('BairroVizinho', 'bairros', 'vizinho_id', 'bairro_id');
//    }
//
//    public function following() {
//        return $this->belongsToMany('User', 'follows', 'follower_id', 'followed_id');
//    }

    public function related()
    {
        return $this->belongsToMany(Bairro::class, 'related_bairro', 'bairro_id', 'related_id');
    }

}
