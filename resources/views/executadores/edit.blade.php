@extends('layouts.main')
@section('title','Painel de Requerentes')
@section('content')

<form action="/executadores/update/{{$executadores->id}}" method="POST">
    @csrf
    @method('PUT')
    
    
<div class="container card" style="top: 20%;">
<h2>Edição de Executador</h2>
  <div class="row">
   
        <br><br>


    <div class="col">
        <center><label for="">Nome do Executador</label></center>
        <br><br>
    <input type="text" class="form-control" id="nome_executor" placeholder="Digite o nome da Comunidade" name="nome_executor" aria-label="Sizing example input" 
    aria-describedby="inputGroup-sizing-sm" value="{{$executadores->nome_executor}}" required>
    
    </div>
  </div>

    
    <button type="submit" class="btn btn-warning" style="margin-bottom: 10px;">Alterar</button> 
    
</div>
    
  </div>
  
</div>




</form>

@endsection