@extends('layouts.main')
@section('title','Cadastro de Comunidade')
@section('content')


<form action="/comunidades" method="POST">
    @csrf
    
    
    
<div class="container card" style="top: 20%;">
<h2>Cadastro de Comunidades</h2>
  <div class="row">
    <div class="col">
        <br><br>

      



    <select name="municipios_id" id="municipios_id" style="width:100%; height:35px;">
    <option value="" disabled="" selected="">Selecione o Municipio</option>
   

    @foreach($municipios as $m)
    <option value="{{$m->id}}">{{$m->nome_municipio}}</option>
   @endforeach

</select>
    </div>
    <div class="col">
        <label for="">Nome da Comunidade</label>
        <br><br>
    <input type="text" class="form-control" id="nome_comunidade" placeholder="Digite o nome da Comunidade" name="nome_comunidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    
    </div>
  </div>

    
    <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
    </div>
</div>
    
  </div>
  
</div>




</form>

@endsection