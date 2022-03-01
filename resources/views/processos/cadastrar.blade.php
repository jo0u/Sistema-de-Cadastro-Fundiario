@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')


<form action="/processos" method="POST">
@csrf

<div class="container card" style="top: 20%;">
<h2>Cadastro de Processo</h2>
  <div class="row">
    <div class="col">
        <br><br>


        <select name="municipios_id" id="municipios_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione o Municipio</option>
   
    @foreach($municipios as $m)
    <option value="{{$m->id}}">{{$m->nome_municipio}}</option>
   @endforeach

</select>


<select name="municipios_id" id="municipios_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione o Requerente</option>
   
    @foreach($requerentes as $r)
    <option value="{{$r->id}}">{{$r->cpf}}</option>
   @endforeach

</select>



</form>


@endsection
