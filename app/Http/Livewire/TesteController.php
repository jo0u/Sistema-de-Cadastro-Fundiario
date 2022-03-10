<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Municipios;
use App\Models\Comunidades;

class TesteController extends Component
{
 
    
    public $selectedMunicipio = null,$selectedComunidade = null;
    public $municipio = null, $comunidades = null;


    public function render()
    {
        
        return view('livewire.teste', [
            'municipios' => Municipios::all()
            
    
    ]);
    }


   
    public function updatedselectedMunicipio($municipios_id){


        $this->comunidades = Comunidades::where('municipios_id',$municipios_id)->get();

    }



}
