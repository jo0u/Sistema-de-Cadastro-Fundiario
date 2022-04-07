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
    public 
    $comunidades = null,
    $processo_id,
    $cod_processo ,
    $requerente_id ,
    $municipio_id , 
    $comunidade_id ,
    $data_ocupacao,
    $data_requerimento,
    $denominacao,
    $cultura,
    $executor_id ,
    $situacao ,
    $observacoes ;
    public $isOpen = 0, $updateMode; 



   


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
           $this->resetInputFields();
           $this->openModal();

    }

    public function openModal(){
        $this->isOpen = true;
    }


    public function closeModal(){
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->cod_processo = '';
        $this->requerente_id = '';
        $this->municipio_id = '';
        $this->comunidade_id = '';
        $this->data_ocupacao = '';
        $this->data_requerimento= '';
        $this->denominacao = '';
        $this->cultura = '';
        $this->executor_id = '';
        $this->situacao = '';
        $this->observacoes = '';
        $this->processo_id = '';
        
        
    }

    public function store(){
        $this->validate([
            'cod_processo'=> 'required',
            'requerente_id'=> 'required',
            'municipio_id'=> 'required',
            'comunidade_id'=> 'required',
            'data_ocupacao'=> 'required',
            'data_requerimento'=> 'required',
            'denominacao'=> 'required',
            'cultura'=> 'required',
            'executor_id'=> 'required',
            'situacao'=> 'required',
            'observacoes'=> 'required',
            
        ]);

        ProcController::updateOrCreate(['id' => $this->processo_id],[
            'cod_processo'=> $this->cod_processo,
            'requerente_id'=> $this->requerente_id,
            'municipio_id'=> $this->municipio_id,
            'comunidade_id'=> $this->comunidade_id,
            'data_ocupacao'=> $this->data_ocupacao,
            'data_requerimento'=> $this->data_requerimento,
            'denominacao'=> $this->denominacao,
            'cultura'=> $this->cultura,
            'executor_id'=> $this->executor_id,
            'situacao'=> $this->situacao,
            'observacoes'=> $this->observacoes
        ]);

        session()->flash('message',
        $this->processo_id ? 'Processo Atualizado com Sucesso' : 'Processo Criado com sucesso.');

        $this->closeModal();
        $this->resetInputFields();


    }

    public function edit($id){
        $processo = ProcController::findOrFail($id);
        $this->processo_id = $id;
        $this->cod_processo = $processo->cod_processo ;
        $this->requerente_id = $processo->requerente_id ;
        $this->municipio_id = $processo->municipio_id ;
        $this->comunidade_id = $processo->comunidade_id ;
        $this->data_ocupacao = $processo->data_ocupacao ;
        $this->data_requerimento = $processo->data_requerimento ;
        $this->denominacao = $processo->denominacao ;
        $this->cultura = $processo->cultura ;
        $this->executor_id = $processo->executor_id ;
        $this->situacao = $processo->situacao ;
        $this->observacoes = $processo->observacoes ;
        
        $this->openModel();
    }

    public function delete($id){
        ProcController::find($id)->delete();
        session()->flash('message','Processo Deltado com Sucesso!');
    }
}
