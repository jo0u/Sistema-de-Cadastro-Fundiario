@extends('layouts.main')
@section('title','Painel de Edição')
@section('content')


<form action="/municipios/update/{{$municipios->id}}" method="POST">
    @csrf
    @method('PUT')
    
    
<div class="container card" style="top: 20%;">
<h2>Edição de Municipios</h2>
<br><br>
  <div class="row">
  <div class="col">
     <label for="">Nome do Muncipio</label>
     <br>
     <input type="text" value="{{$municipios->nome_municipio}}" class="form-control" aria-label="Sizing example input" id="nome_municipio" name="nome_municipio" aria-describedby="inputGroup-sizing-sm"  required>
    </div>
    <div class="col">
    <label for="">GeoCodigo</label>
    <br>
    <input type="text" value="{{$municipios->geocodigo}}" class="form-control" aria-label="Sizing example input" id="geocodigo" name="geocodigo" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col">
      <br>
     <center> <label for="">CEP</label></center>
      <input type="text" value="{{$municipios->cep}}" class="form-control" aria-label="Sizing example input" id="cep" name="cep" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col"><br>
     <center> <label for="">Fração Minima</label></center>
      <input type="text" value="{{$municipios->fracao_min}}" class="form-control" aria-label="Sizing example input" id="fracao_min" name="fracao_min" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col">
      <br>
     <center> <label for="">MF</label></center>
      <input type="text" value="{{$municipios->mf}}" class="form-control" aria-label="Sizing example input" id="mf" name="mf" aria-describedby="inputGroup-sizing-sm" required>
  </div>

  <div class="container">
  <br><br>
  <div class="row">
    
    <div class="col-sm">
      
    <center> <label for="">Território</label></center>
      <input type="text" value="{{$municipios->territorio}}" class="form-control" aria-label="Sizing example input" id="territorio" name="territorio" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Meridiano</label></center>
      <input type="text" value="{{$municipios->meridiano}}" class="form-control" aria-label="Sizing example input" id="meridiano" name="meridiano" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="col-sm">
    <center> <label for="">Nome de Codmarca</label></center>
      <input type="text" value="{{$municipios->nom_comarc}}" class="form-control" aria-label="Sizing example input" id="nom_comarc" name="nom_comarc" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
  <input type="submit" class="btn btn-primary" value="Editar">
</div>


  
</div>

</div>




</form>




@endsection