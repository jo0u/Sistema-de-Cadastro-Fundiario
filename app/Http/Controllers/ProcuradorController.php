<?php

namespace App\Http\Controllers;
use App\Models\Procuradores;
use Illuminate\Http\Request;

class ProcuradorController extends Controller
{
    public function dashboard(){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){

        $search = request('search');

        if($search):

            $procuradores = Procuradores::where([
                ['nome','like',"%".($search)."%"]
            ])->get();
            else:

       $procuradores = Procuradores::all();

            endif;

        return view('procuradores.dashboard',['procuradores' => $procuradores]);
        }else{
            $this->authorize('adminlverro');
        }
    }

    public function create(){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){
        return view('procuradores.cadastrar');
        }else{
            $this->authorize('adminlverro');
        }
    }

    public function store(Request $request){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){

        $procuradores = new Procuradores;

        $procuradores->nome =  $request->nome;


        $procuradores->save();



        return redirect('/procuradores/dashboard')->with('msg','Procurador cadastrado com sucesso!');

        }else{
            $this->authorize('adminlverro');
        }

    }

    public function show($id){

        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){
        $procuradores = Procuradores::findOrFail($id);


        return view('procuradores.show',['procuradores' => $procuradores]);

        }else{
            $this->authorize('adminlverro');
        }
    }

    public function edit($id){
        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){

        $procuradores = Procuradores::findOrFail($id);

        return view('procuradores.edit',['procuradores' => $procuradores]);
        }else{
            $this->authorize('adminlverro');
        }
    }

    public function update(Request $request){


        $admin = auth()->user()->admin;
        $cadastrador = auth()->user()->cadastrador;
       

        if($admin == 1 || $cadastrador == 1 ){

        Procuradores::findOrFail($request->id)->update($request->all());

        return redirect('/procuradores/dashboard')->with('msg','Procurador alterado com sucesso!');
        }else{
            $this->authorize('adminlverro');
        }
    }


    public function destroy($id){
        $admin = auth()->user()->admin;
      
        if($admin == 1){

        Procuradores::findOrFail($id)->delete();

        return redirect('/procuradores/dashboard')->with('msg','Procurador deletado com sucesso!');
        }else{
            $this->authorize('adminlverro');
        }

    }
}
