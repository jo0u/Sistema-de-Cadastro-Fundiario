@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')

<h2>Painel de Controle de Municipios</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<i class="bi bi-plus-circle-dotted"></i>


<form action="/municipios/dashboard" method="GET">
   

<!--<input type="text" id="search" name="search" class="form-control" placeholder="Pesquisa rápida">-->

<label for="exampleDataList" class="form-label">Pesquisar</label>
<input class="form-control" list="datalistOptions" id="search" name="search" placeholder="Pesquise o nome do municipio">
<datalist id="datalistOptions">
    @foreach($municipios as $m)
  <option value="{{$m->nome_municipio}}">
  @endforeach
  
</datalist>
 

</form>
<br>
<a href="/municipios/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>
 
<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Nome Municipios </th> <th> Nome Comarca </th><th> CEP </th> <th>GeoCodigo</th>  <th> Ações </th></tr>

@foreach($municipios as $m)


<tr> <th> {{$m->nome_municipio}} </th> <th> {{$m->nom_comarc}} </th><th> {{$m->cep}} </th> <th>{{$m->geocodigo}}</th>  <th> <button> <a href="">Ver</a>
</button> <a href="/municipios/edit/{{$m->id}}"> <button>Editar</button> </a>



<form action="/municipios/{{$m->id}}" method="POST">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-dark"><ion-icon name="trash-outline"></ion-icon></button>

</form>

@endforeach




</tr></tbody></table>
<br>

</div>



  
  

@endsection

