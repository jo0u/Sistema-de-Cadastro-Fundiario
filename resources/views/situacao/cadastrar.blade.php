@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')

<div class="container card" style="top: 20%;">
<h2>Cadastro de Status</h2>
  <div class="row">
    <div class="col">
        <br><br>


<form action="/status" method="POST">
    @csrf
<div class="container">
  <div class="row row-cols-2">
    <div class="col">
        <div>
    <label for="">Código De Status </label>
</div>
<br>
    <input type="text" class="form-control" id="status" placeholder="Digite o código do status" name="status" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    
    
    <div class="col">
    <div>
    <label for="">Descrição</label>   
    
</div>
<br>
    <input type="text" class="form-control" id="descricao" placeholder="Digite o nome da Descrição" name="descricao" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
  </div>
    <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px; width:100%;">Cadastrar</button> 
    </form>

@endsection