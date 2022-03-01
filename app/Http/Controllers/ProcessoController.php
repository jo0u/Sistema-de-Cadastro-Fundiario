<?php

namespace App\Http\Controllers;
use App\Models\Processos;
use App\Models\Requerente;
use App\Models\Municipios;
use App\Models\Comunidades;
use App\Models\Executores;
use App\Models\Situacoes;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProcessoController extends Controller
{
    public function dashboard(){
        $search = request ('search');

        if($search):
            $processos = Processos::where([
                ['cod_processo', 'like',"%".($search)."%"]
            ])->get();

            else:
                $processos = Processos::all();
        endif;
        
        return view('/processos/dashboard',['processos' => $processos]);
    }





    public function create(){

         $requerentes = Requerente::all();
         $municipios = Municipios::all();
         $comunidades = Comunidades::all();
         $executores = Executores::all();
         $situacoes = Situacoes::all();



         return view('processos.cadastrar',['requerentes' => $requerentes],
         ['municipios' => $municipios],
         ['comunidades' => $comunidades],
         ['executadores' => $executores],
        ['situacoes' => $situacoes]
    );
    }

    public function store(Request $request){

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
        $processos->status_id = $request->status_id;
       
        $processos->save();


        return redirect('/processos/dashboard')->witth('msg','Processo Criado com sucesso!');

    }
   

}
