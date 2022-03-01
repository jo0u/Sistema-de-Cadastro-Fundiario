<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function requerentes(){

        return $this->belongsTo(Requerente::class);
    }


    public function municipios(){
        return $this->belongsTo(Municipio::class);
    }

    public function comunidades(){
        return $this->belongsTo(Comunidade::class);
    }

    public function executores(){
        return $this->belongsTo(Executor::class);
    }

    public function situacao(){
        return $this->belongsTo(Situacao::class);
    }










}

