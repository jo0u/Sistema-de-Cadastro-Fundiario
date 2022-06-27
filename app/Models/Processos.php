<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $fillable = [
        'cod_processo',
        'requerente_id ',
        'municipio_id ',
        'comunidade_id ',
        'data_ocupacao',
        'data_requerimento',
        'denominacao',
        'cultura',
        'executor_id',
        'observacoes',
        'situacao_id ',
        'projeto_id',
        'area'

    ];

    protected $casts = [
        'data_ocupacao' => 'datetime',
        'data_requerimento' => 'datetime',
    ];


    public function requerente(){

        return $this->belongsTo(Requerente::class);
    }


    public function municipio(){
        return $this->belongsTo(Municipios::class);
    }

    public function comunidades(){
        return $this->belongsTo(Comunidades::class);
    }

    public function executor(){
        return $this->belongsTo(Executores::class);
    }

    public function situacao(){
        return $this->belongsTo(Situacoes::class);
    }

    public function projeto(){

        return $this->belongsTo(Projetos::class);
    }










}

