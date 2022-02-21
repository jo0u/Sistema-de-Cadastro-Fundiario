@extends('layouts.main')
@section('title','SCF')
@section('content')
<h2>Painel de Controle de Procuradores</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<form action="/procuradores/dashboard" method="GET">

<label for="exampleDataList" class="form-label"></label>
<input class="form-control" list="datalistOptions" id="search" name="search" placeholder="Pesquise o nome dos procuradores">
<datalist id="datalistOptions">
    @foreach($procuradores as $p)
  <option value="{{$p->nome}}">
  @endforeach
  
</datalist>
</form>
<i class="bi bi-plus-circle-dotted"></i>
<a href="/procuradores/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>













<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Nome do Procurador </th> <th> Ações </th></tr>

@foreach($procuradores as $p)

<tr> <th> {{$p->nome}} </th>  <th> <button> <a href="#">Ver</a>
</button> <a href="/procuradores/edit/{{$p->id}}"> <button>Editar</button> </a>


<form action="/procuradores/{{$p->id}}" method="POST">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>

</form>

</th></tr>

@endforeach




</tr></tbody></table>
    </div>

@endsection
