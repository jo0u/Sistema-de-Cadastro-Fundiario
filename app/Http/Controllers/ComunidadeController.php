<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunidades;
use App\Models\Municipios;
class ComunidadeController extends Controller
{
    public function dashboard(){
        $admin = auth()->user()->admin;
      
        if($admin == 1){

        $search = request('search');
        
        if($search):
            $comunidades = Comunidades::where([
                ['municipios_id', 'like',"%".($search)."%"]
            ])->get();
            else:
                $comunidades = Comunidades::all();
            endif;
                   
                    $comunidades = Comunidades::paginate(15000);
        return view('/comunidades/dashboard',['comunidades' => $comunidades]);
        }else{
            $this->authorize('adminlverro');
        }
    }


    public function show(){

        $admin = auth()->user()->admin;
      
        if($admin == 1){

        $search = request('search');
        
        if($search):
            $comunidades = Comunidades::where([
                ['municipios_id', 'like',"%".($search)."%"]
            ])->get();
            else:
                $comunidades = Comunidades::all();
            endif;
        return view('comunidades.show',['comunidades' => $comunidades]);

        }else{
            $this->authorize('adminlverro');
        }
    }

    public function create(){

        $admin = auth()->user()->admin;
      
        if($admin == 1){
        
        $municipios = Municipios::all();


        return view('comunidades.cadastrar',['municipios' => $municipios]);
        }else{
            $this->authorize('adminlverro');
        }
    }

    public function store(Request $request){

        $admin = auth()->user()->admin;
      
        if($admin == 1){

        $comunidades = Comunidades::all();

        $comunidades = new Comunidades;

        $comunidades->municipios_id = $request->municipios_id ;
        $comunidades->nome_comunidade = $request->nome_comunidade ;
        
       

        $comunidades->save();

       

        return redirect('/comunidades/dashboard')->with('msg','Comunidade criada com sucesso!');
        }else{
            $this->authorize('adminlverro');
        }

    }

    public function edit($id){

        $admin = auth()->user()->admin;
      
        if($admin == 1){

        $comunidades = Comunidades::findOrFail($id);

        $municipios = Municipios::all();

        return view('comunidades.edit',['comunidades' => $comunidades , 'municipios' => $municipios]);
        }else{
            $this->authorize('adminlverro');
        }
    }

}
