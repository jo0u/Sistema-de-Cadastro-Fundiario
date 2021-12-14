<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comunidades extends Model
{
    
    use HasFactory;
    protected $guarded = [];

    public function comunidade(){

        return $this->belongsTo('App\Models\Municipios');

    }


}
