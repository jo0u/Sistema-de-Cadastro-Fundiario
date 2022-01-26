@extends('layouts.main')
@section('title','SCF')
@section('content')

<h2>Painel de Controle de Projetos</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<i class="bi bi-plus-circle-dotted"></i>
<a href="/projetos/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>

<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Código </th> <th> Descrição </th><th> Ações </th></tr>

@foreach($projetos as $p)

<tr> <th> {{$p->codigo}} </th> <th> {{$p->descricao}} </th><th> <button> <a href="/projetos/{{$p->id}}">Ver</a>
</button> <a href="/projetos/edit/{{$p->id}}"> <button>Editar</button> </a>

<form action="/projetos/{{$p->id}}" method="POST">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>

</form>

@endforeach

@endsection
