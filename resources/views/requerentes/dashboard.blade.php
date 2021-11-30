@extends('layouts.main')
@section('title','Painel de Requerentes')
@section('content')

<h2>Painel de Controle de Requerentes</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<i class="bi bi-plus-circle-dotted"></i>
<a href="/requerentes/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>

<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Requerente </th> <th> Pessoa </th><th> CPF </th> <th>Est.Civil</th>  <th> Ações </th></tr>

@foreach($requerente as $r)

<tr> <th> {{$r->nome}} </th> <th> {{$r->pessoa}} </th><th> {{$r->cpf}} </th> <th>{{$r->estado_civil}}</th>  <th> <button>Editar</button> <button>Excluir</button> </th></tr>

@endforeach




</tr></tbody></table>
    </div>

@endsection

