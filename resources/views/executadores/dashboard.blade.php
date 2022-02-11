@extends('layouts.main')
@section('title','Painel de Requerentes')
@section('content')

<h2>Painel de Controle de Executor</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<i class="bi bi-plus-circle-dotted"></i>

<br>
<a href="/executadores/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>
 

<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Nome do Executadores </th> <th> Ações </th></tr>

@foreach($executadores as $e)

<tr> <th> {{$e->nome_executor}} </th> 
<th>  <a href="/executadores/edit/{{$e->id}}"> <button>Editar</button> </a>


<form action="/executadores/{{$e->id}}" method="POST">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-dark"><ion-icon name="trash-outline"></ion-icon></button>

</form>
@endforeach

@endsection('content')