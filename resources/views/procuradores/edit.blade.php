@extends('layouts.main')
@section('title','Cadastro de Comunidade')
@section('content')


<form action="/procuradores/update/{{$procuradores->id}}" method="POST">
    @csrf
    @method('PUT')
    
    
<div class="container card" style="top: 20%;">
<h2>Edição de Procurador</h2>
  <div class="row">
   
        <br><br>


    <div class="col">
        <center><label for="">Nome do Procurador</label></center>
        <br><br>
    <input type="text" class="form-control" id="nome" placeholder="Digite o nome da Comunidade" name="nome" aria-label="Sizing example input" 
    aria-describedby="inputGroup-sizing-sm" value="{{$procuradores->nome}}" required>
    
    </div>
  </div>

    
    <button type="submit" class="btn btn-warning" style="margin-bottom: 10px;">Alterar</button> 
    
</div>
    
  </div>
  
</div>




</form>

@endsection