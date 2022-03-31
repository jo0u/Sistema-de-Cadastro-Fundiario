@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



<form action="/processos/dashboard" method="GET">
   

<!--<input type="text" id="search" name="search" class="form-control" placeholder="Pesquisa rápida">-->

<label for="exampleDataList" class="form-label">Pesquisar</label>
<input class="form-control" list="datalistOptions" id="search" name="search" placeholder="Pesquise o codígo do processo">
<datalist id="datalistOptions">
    @foreach($processos as $p)
  <option value="{{$p->cod_processo}}">
  @endforeach
  
</datalist>
 

</form>


<br>
<i class="bi bi-plus-circle-dotted"></i>
<a href="/livewire/proc-controller" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>







<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Codígo de Processo </th> <th> Requerente </th><th>Situação</th><th> CPF </th><th> <th>Ações </th></tr>

@foreach($processos as $p)


<tr><th>{{$p->cod_processo}}</th><th>{{$p->requerente->nome}}</th> <th> {{$p->situacao->cod_situacao}}</th> <th>{{$p->requerente->cpf}}</th></tr>



@endforeach





@endsection
