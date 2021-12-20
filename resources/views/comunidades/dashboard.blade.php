@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')

<h2>Painel de Controle de Comunidade</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<i class="bi bi-plus-circle-dotted"></i>
<a href="/comunidades/cadastrar" class="btn-floating btn-large waves-effect waves-light green" style="margin-left:50px;"><i class="material-icons" >add</i></a>

<div class="card-panel">
<br><br><table border="1px"><tbody><tr> <th> Municipio </th> <th> Nome da Comunidade </th><th> Distrito Sede </th> <th>Responsável</th> <th> Responsável da CDA <th> Ações </th></tr>

@foreach($comunidades as $c)


<tr> <th>{{$c->municipios->nome_municipio}}  </th> <th> {{$c->nome_comunidade}} </th><th> {{$c->distrito_sede}} </th> <th>{{$c->responsavel}}</th> <th>{{$c->responsavel_cda}}</th>  <th> <button> <a href="">Ver</a>
</button> <a href="/municipios/edit"> <button>Editar</button> </a>


@endforeach








</tr></tbody></table>
    </div>

@endsection