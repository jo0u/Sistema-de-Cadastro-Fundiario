@extends('layouts.main')
@section('title','Cadastro de Comunidade')
@section('content')


<form action="/comunidades/update/{{$comunidades->id}}" method="POST">
    @csrf
    @method('PUT')
    
    
<div class="container card" style="top: 20%;">
<h2>Edição de Comunidades</h2>
  <div class="row">
    <div class="col">
        <br><br>

      



    <select name="municipios_id" id="municipios_id" style="width:100%; height:35px;">
    <option value="{{$comunidades->municipios_id}}" disabled="" selected="">{{$comunidades->municipios->nome_municipio}}</option>
   

    @foreach($municipios as $m)
    <option value="{{$m->id}}">{{$m->nome_municipio}}</option>
   @endforeach

</select>
    </div>
    <div class="col">
        <label for="">Nome da Comunidade</label>
        <br><br>
    <input type="text" class="form-control" id="nome_comunidade" placeholder="Digite o nome da Comunidade" name="nome_comunidade" 
    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{$comunidades->nome_comunidade}}">
    
    </div>
  </div>

    
    <button type="submit" name="alterar" class="btn btn-success" style="margin-bottom: 10px;">Alterar</button> 
    
</div>
    
  </div>
  
</div>




</form>

@endsection