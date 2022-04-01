<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Processos;
use App\Models\Requerente;
use App\Models\Municipios;
use App\Models\Comunidades;
use App\Models\Executores;
use App\Models\Situacoes;
use Illuminate\Http\Request;
class ProcController extends Component
{

    public $selectedMunicipio = null,$selectedComunidade = null;
    public $municipio = null, 
    $comunidades = null,
    $requerente = null,
    $processo = null,
    $executores = null,
    $situacao = null,
    $processos = null;


    public function render()
    {

        return view('livewire.proc-controller', [
            'municipios' => Municipios::all(),
            'requerentes' => Requerente::all(),
            'executor' => Executores::all(),
            'situacao' => Situacoes::all(),
            'processos' => Processos::all()
    
    ]); 
    }

    public function updatedselectedMunicipio($municipios_id){


        $this->comunidades = Comunidades::where('municipios_id',$municipios_id)->get();

    }

    public function create(){
            Processos::create([
                

            ]);

    }
}
