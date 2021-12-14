<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipios;
class MuncipioController extends Controller
{
    public function dashboard(){

        $search = request('search');

        if($search):
          
            $municipios = Municipios::where([
                ['nome_municipio' , 'like',$search]
            ])->get();
        else:
            $municipios = Municipios::all();
        endif;
        
           
       
       

        return view('municipios.dashboard',['municipios' => $municipios]);
    }


    public function create(){

        
        


        return view('municipios.cadastrar');
    }



    public function store(Request $resquest){
     
        $municipios = new Municipios;
        $municipios->geocodigo = $resquest->geocodigo;
        $municipios->nome_municipio = $resquest->nome_municipio;
        $municipios->cep = $resquest->cep;
        $municipios->fracao_min = $resquest->fracao_min;
        $municipios->mf = $resquest->mf;
        $municipios->territorio = $resquest->territorio;
        $municipios->meridiano = $resquest->meridiano;
        $municipios->nom_comarc = $resquest->nom_comarc;


        $municipios->save();


        return redirect('/municipios/dashboard')->with('msg','Municipio criado com sucesso!');
        }


    public function show($id){
        $municipios = Municipios::findOrFail($id);


        return view('municipios.show',['municipios' => $municipios]);

    }

    
}
