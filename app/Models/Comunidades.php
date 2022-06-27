<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comunidades extends Model
{
    
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'nome_comunidade',
        'distrito_sede',
        'responsavel',
        'responsavel_cda',
        'municipios_id',

    ];



    public function municipios(){


        return $this->belongsTo(Municipios::class);
    }

}
