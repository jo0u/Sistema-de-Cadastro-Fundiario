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
     <label for="">Nome do Muncipio</label>
     <br>
     <input type="text" class="form-control" aria-label="Sizing example input" id="nome_municipio" name="nome_municipio" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
    <label for="">GeoCodigo</label>
    <br>
    <input type="text" class="form-control" aria-label="Sizing example input" id="geocodigo" name="geocodigo" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col">
      <br>
     <center> <label for="">CEP</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="cep" name="cep" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col"><br>
     <center> <label for="">Fração Minima</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="fracao_min" name="fracao_min" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
      <br>
     <center> <label for="">MF</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="mf" name="mf" aria-describedby="inputGroup-sizing-sm" required>
  </div>

  <div class="container">
  <br><br>
  <div class="row">
    
    <div class="col-sm">
      
    <center> <label for="">Território</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="territorio" name="territorio" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Meridiano</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="meridiano" name="meridiano" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Nome de Codmarca</label></center>
      <input type="text" class="form-control" aria-label="Sizing example input" id="nom_comarc" name="nom_comarc" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
  <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button>
</div>


  
</div>

</div>




</form>




@endsection