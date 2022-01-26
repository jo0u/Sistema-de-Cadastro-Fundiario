@extends('layouts.main')
@section('title','Cadastro de Comunidade')
@section('content')


<form action="/projetos" method="POST">
    @csrf
    
    <br>
   <center> <h2>Cadastro de Projetos</h2></center>
<div class="container card" style="top: 20%;">



  <div class="row">
     
    <div class="col">
    <br>

        <label for="">Código</label>
        <br><br>
    <input type="text" class="form-control" id="codigo" placeholder="Digite o código do projeto" name="codigo" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    



    </div>
    <div class="col">
    <br>
        <label for="">Descrição</label>
        <br><br>
    <input type="text" class="form-control" id="descricao" placeholder="Digite uma descrição sobre o projeto" name="descricao" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    
    </div>
  </div>
  <br>
    
    <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
    
</div>
    
  </div>
  
</div>




</form>

@endsection