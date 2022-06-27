@extends('layouts.main')
@section('title','Cadastro de Comunidade')
@section('content')


<form action="/procuradores" method="POST">
    @csrf
    
    
    
<div class="container card" style="top: 20%;">
<h2>Cadastro de Procurador</h2>
  <div class="row">
   
        <br><br>


    <div class="col">
        <center><label for="">Nome do Procurador</label></center>
        <br><br>
    <input type="text" class="form-control" id="nome" placeholder="Digite o nome do Procurador" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    
    </div>
  </div>

    
    <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
    
</div>
    
  </div>
  
</div>




</form>

@endsection