@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')


<form method="POST" wire:submit.prevent="create">
@csrf

<div class="container card" style="top: 20%;">
<h2>Cadastro de Processo</h2>
  <div class="row">
    <div class="col">
        <br><br>



        


      <label for="">Codígo de Processo: </label>
     <input id="cod_processo" name="cod_processo" type="text" autofocus/>



<div class="container">
  <div class="row">
    <div class="col">

    <br>

    <!-- <select name="requerente_id" id="requerente_id" style="width:100%; height:35px;" onLoad="setInterval('Atualizar()',5000)">
    <option value="" disabled="true" selected="">Selecione o Requerente</option>
   
    @foreach($requerentes as $r)
    <option value="{{$r->id}}">{{$r->cpf}}</option>
   @endforeach


    </select> -->

<input type="number" class="form-control" list="datalistOptions" id="requerente_id" name="requerente_id" placeholder="Pesquise o codígo do processo">
<datalist id="datalistOptions">
    @foreach($requerentes as $r)
  <option value="{{$r->id}}">{{$r->cpf}}</option>
  @endforeach
  
</datalist>




  
    </div>
    <div class="col-6">
      <br>
    
      <select name="municipio_id" id="municipio_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione o Municipio</option>
   
    @foreach($municipios as $m)
    <option value="{{$m->id}}">{{$m->nome_municipio}}</option>
   @endforeach

</select>



    </div>
    <div class="col">
      <br>
   


     


      <select name="comunidade_id" id="comunidade_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione a Comunidade</option>
   
    @foreach($comunidades as $c)
    <option value="{{$c->id}}">{{$c->nome_comunidade}}</option>
   @endforeach
  

    <!-- @foreach($comunidades as $c)
    <option value="{{$c->id}}">{{$c->nome_comunidade}}</option>
   @endforeach -->

</select>

    </div>
  </div>
  <div class="row">
    <div class="col">
     <br>
    <div class="col"><label for=""> Data de Ocupação</label>
    <input type="date" class="form-control" aria-label="Sizing example input" id="data_ocupacao" name="data_ocupacao" required aria-describedby="inputGroup-sizing-sm"></div>
    </div>
    <div class="col-5">
     <br>
    <div class="col"><label for=""> Data de Requerimento</label>
    <input type="date" class="form-control" aria-label="Sizing example input" id="data_requerimento" name="data_requerimento" required aria-describedby="inputGroup-sizing-sm"></div>
    </div>
    <div class="col">
      <br>
      <label for="">Denominação</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="denominacao" name="denominacao" aria-describedby="inputGroup-sizing-sm" required>
    </div>

    
    <div class="col-6">
    <br>
      <label for="">Cultura</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="cultura" name="cultura" aria-describedby="inputGroup-sizing-sm" required>
   
    </div>
    <div class="col">
    <br>
      <label for="">Befentoria</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="befentoria" name="befentoria" aria-describedby="inputGroup-sizing-sm" required>
   
    </div>
  </div>
  <div class="row">
      <div class="col-6">
     <br>
    <select name="executor_id" id="executor_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione do Executor</option>
   
    @foreach($executores as $e)
    <option value="{{$e->id}}">{{$e->nome_executor}}</option>
   @endforeach

</select>


    </div>
   
    <div class="col-6">
<br>
    <select name="situacao_id" id="situacao_id" style="width:100%; height:35px;">
    <option value="" disabled="true" selected="">Selecione a Situação</option>
    <option value="1">RE</option>

    <!-- @foreach($situacoes as $s)
    <option value="{{$s->id}}">{{$s->cod_situacao}}</option>
   @endforeach -->

</select>



    </div>


  </div>
  <div class="form-group">
    <br>
    <label for="exampleFormControlTextarea1"> Observações </label>
    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
  </div>
  
</div>






<button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
    




















</form>

<script>
  $("#cod_processo").mask("99999999");


  // $("#municipio_id").on("change",function(){
  //     var municipio_id = $ ("#municipio_id").val();
  //     alert(municipio_id)
  // });
</script>

@endsection
