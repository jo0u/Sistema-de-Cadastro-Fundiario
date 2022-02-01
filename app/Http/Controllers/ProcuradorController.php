<?php

namespace App\Http\Controllers;
use App\Models\Procuradores;
use Illuminate\Http\Request;

class ProcuradorController extends Controller
{
    public function dashboard(){

       $procuradores = Procuradores::all();


        return view('/procuradores/dashboard',['procuradores' => $procuradores]);

    }

    public function create(){
        return view('procuradores.cadastrar');
    }

    public function store(Request $request){

        $procuradores = new Procuradores;

        $procuradores->nome =  $request->nome;


        $procuradores->save();



        return redirect('/procuradores/dashboard')->with('msg','Procurador cadastrado com sucesso!');


    }

    public function show($id){
        $procuradores = Procuradores::findOrFail($id);


        return view('procuradores.show',['procuradores' => $procuradores]);
    }

    public function edit($id){
        $procuradores = Procuradores::findOrFail($id);

        return view('procuradores.edit',['procuradores' => $procuradores]);
    }

    public function update(Request $request){

        Procuradores::findOrFail($request->id)->update($request->all());

        return redirect('/procuradores/dashboard')->with('msg','Procurador alterado com sucesso!');
    }


    public function destroy($id){

        Procuradores::findOrFail($id)->delete();

        return redirect('/procuradores/dashboard')->with('msg','Procurador deletado com sucesso!');

    }
}
