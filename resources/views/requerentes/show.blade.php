@extends('layouts.main')
@section('title','Requerentes')
@section('content')





<h3 style="text-align:center;">{{$requerentes->nome}}</h3>




    <div class="container-grid">
  <div class="row">
    <div class="col"> <h6>  CPF<br> {{$requerentes->cpf}}</h6></div>
    <div class="col"><h6>  Profissão<br> {{$requerentes->profissional}}</h6></div>
    <div class="col"><h6>  Pessoa<br>

@if($requerentes->pessoa == 'F')
Fisica
@else
Juridica
@endif


<br></div>
    <div class="w-100"></div><br>
    <div class="col"><h6>  RG<br> {{$requerentes->rg}}</h6></div>
    <div class="col"><h6>  Nacionalidade<br> {{$requerentes->nacionalidade}}</h6></div>
    <div class="col"><h6>  Sexo<br> @if($requerentes->sexo == 'F')

Feminino

@else
Masculino
@endif


</h6>
<br></div>
    <div class="w-100"></div><br>
    <div class="col"><h6>  Nome do Pai<br> {{$requerentes->nome_pai}} <h6></div>
    <div class="col"><h6>  Telefone<br> {{$requerentes->telefone}}</h6></div>
    <div class="col"><h6>  Estado Civil<br> {{$requerentes->estado_civil}}</h6>
<br></div><br>
    <div class="w-100"></div><br>
    <div class="col"><h6>  Nome da Mãe<br> {{$requerentes->nome_mae}}</h6></div>
    <div class="col"><h6>  Endereço<br> {{$requerentes->endereco}}</h6></div>
    <div class="col"><h6>  Data de Nascimento<br> {{date('d/m/Y', strtotime($requerentes->data_nascimento))}} 
<br></div><br>
    <div class="w-100"></div><br>
    <div class="col"><h6>  Email<br> {{$requerentes->email}}</h6></div>
    <div class="col"><h6>  Estado<br> {{$requerentes->estado}}</h6>
<br></div>
    <div class="col"></div>

  </div>
  <button style="float:right;"> <a href="/requerentes/dashboard">Voltar</a></button>
</div>
 

@endsection
