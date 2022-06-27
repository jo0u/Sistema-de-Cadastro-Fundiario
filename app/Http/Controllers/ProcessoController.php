<?php

namespace App\Http\Controllers;
use App\Models\Processos;
use App\Models\Requerente;
use App\Models\Municipios;
use App\Models\Comunidades;
use App\Models\Executores;
use App\Models\Situacoes;
use App\Models\Projetos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProcessoController extends Controller
{
     
    public function dashboard(){
           
    $admin = auth()->user()->admin;
    $cadastrador = auth()->user()->cadastrador;
    $analista = auth()->user()->analista_tecnico;
    $credenciado = auth()->user()->credenciado;
    $juridico = auth()->user()->juridico;

            if($admin ==1 || $cadastrador == 1 || $analista == 1 || $credenciado == 1 || $juridico ){

            $requerentes = Requerente::all();
            $municipios = Municipios::all();
            $comunidades = Comunidades::all();
            $executores = Executores::all();
            $situacoes = Situacoes::all();
    
            $search = request ('search');
    
            if($search):
                $processos = Processos::where([
                    ['cod_processo', 'like',"%".($search)."%"]
                ])->get();
    
                else:
                    $processos = Processos::all();
            endif;
            
            
            
       
        }else{
            $this->authorize('adminlv1');
        }

        return view('processos.dashboard',['processos' => $processos]);

    }
    





    public function create(){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        $analista = auth()->user()->analista_tecnico;
        $credenciado = auth()->user()->credenciado;


        if($admin ==1 || $cadastrador == 1 || $analista == 1 || $credenciado == 1 ){


         $requerentes = Requerente::all();
        $municipios = Municipios::all();
        $comunidades = Comunidades::all();
         $executores = Executores::all();
         $situacoes = Situacoes::all();
         $projetos = Projetos::all();

        

         return view('processos.cadastrar',['requerentes' => $requerentes,
         'municipios' => $municipios,
        'comunidades' => $comunidades,
         'executores' => $executores,
        'situacoes' => $situacoes,
        'projetos' => $projetos
        ]);
    }
    }

    public function store(Request $request){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
        $analista = auth()->user()->analista_tecnico;
        $credenciado = auth()->user()->credenciado;


        if($admin ==1 || $cadastrador == 1 || $analista == 1 || $credenciado == 1 ){

        $processos = Processos::all();

        $processos = new Processos;


        $processos->cod_processo = $request->cod_processo;
        $processos->requerente_id = $request->requerente_id;
        $processos->municipio_id = $request->municipio_id;        
        $processos->comunidade_id = $request->comunidade_id;
        $processos->data_ocupacao = $request->data_ocupacao;
        $processos->data_requerimento = $request->data_requerimento;
        $processos->denominacao = $request->denominacao;
        $processos->cultura = $request->cultura;
        $processos->executor_id = $request->executor_id;
        $processos->observacoes = $request->observacoes;
        $processos->situacao_id = $request->situacao_id;
        $processos->projeto_id = $request->projeto_id;
        $processos->area = $request->area;
       
        $processos->save();


        return redirect('/processos/dashboard');
        }
    }
   



    // public $selectMunicipio = null,
    //         $selectComunidade = null;

    //         public $municipios = null;
    //         public $comunidades = null;


    // public function teste(){

       
       
       
       
       
    //     return view('processos/teste',[
           
            

    //     ]);
    // }


    
        

    

}
