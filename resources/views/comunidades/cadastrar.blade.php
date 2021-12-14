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

      



    <select name="municipio" id="municipio" style="width:100%; height:35px;">
    <option value="" disabled="" selected="">Selecione o Municipio *CHAVE ESTRANGEIRA*</option>
   

</select>
    </div>
    <div class="col">
        <label for="">Nome da Comunidade</label>
        <br><br>
    <input type="text" class="form-control" id="nome_comunidade" placeholder="Digite o nome da Comunidade" name="nome_comunidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    
    </div>
  </div>
  <div class="row">
     
    <div class="col">
        <br><br>
    <label for="">Distrito Sede</label>
    <br><br>
    <input type="text" class="form-control" id="distrito_sede" name="distrito_sede" placeholder="Digite o número do distrito sede" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
    <br><br>
    <label for="">Responsável</label>
    <br><br>
    <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Nome responsável pela comunidade" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
    <br><br>
    <label for="">Responsável da CDA</label>
    <br><br>
    <input type="text" class="form-control" id="responsavel_cda" name="responsavel_cda" placeholder="Nome do responsável da CDA" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
<button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom:20px;">Cadastrar</button>    
    
</div>
    
  </div>
  
</div>




</form>

@endsection