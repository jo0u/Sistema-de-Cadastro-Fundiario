@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')


<form action="/municipios" method="POST">
@csrf
    
    
    
<div class="container card" style="top: 20%;">
<h2>Cadastro de Municipios</h2>
<br><br>
  <div class="row">
  <div class="col">
     <label for="">Nome do Muncípio</label>
     <br>
     <input type="text" class="form-control" aria-label="Sizing example input" id="nome_municipio" name="nome_municipio" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
    <label for="">GeoCodigo</label>
    <br>
    <input type="text" class="form-control" aria-label="Sizing example input" id="geocodigo" name="geocodigo" aria-describedby="inputGroup-sizing-sm" minlength="7" maxlength="7" required>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col">
      <br>
     <center> <label for="">CEP</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="cep" name="cep" aria-describedby="inputGroup-sizing-sm" minlength="8" maxlength="8" required>
    </div>
    <div class="col"><br>
     <center> <label for="">Fração Mínima</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="fracao_min" name="fracao_min" aria-describedby="inputGroup-sizing-sm" minlength="1" maxlength="1" required>
    </div>
    <div class="col">
      <br>
     <center> <label for="">MF</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="mf" name="mf" aria-describedby="inputGroup-sizing-sm" minlength="2" maxlength="2" required>
  </div>

  <div class="container">
  <br><br>
  <div class="row">
    
    <div class="col-sm">
      
    <center> <label for="">Território</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="territorio" name="territorio" aria-describedby="inputGroup-sizing-sm" minlength="3" maxlength="3" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Meridiano</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="meridiano" name="meridiano" aria-describedby="inputGroup-sizing-sm" minlength="2" maxlength="2" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Nome de Comarca</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="nom_comarc" name="nom_comarc" aria-describedby="inputGroup-sizing-sm" maxlength="3" required>
    </div>
  </div>
  <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button>
</div>


  
</div>

</div>




</form>




@endsection