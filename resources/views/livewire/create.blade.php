
<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/processos.css">
<div class="card">
  <div class="card-header">
<center>
    <h2>Cadastro de Processo</h2>
    </center>
  </div>
  <div class="card-header">

  <a href="/requerentes/cadastrar" target="blank"> <button type="button" class="btn btn-primary">Cadastrar Requerentes</button></a>
</div>
<div class="card-body">
<form method="POST" action="/processos">
@csrf
<div class="container card" style="top: 20%;">
<div class="container">
  
  <div class="row">
    <div class="col">
       <label for="">Código de emilly: </label><br>
       <input id="cod_processo" name="cod_processo" type="text" wire:model="cod_processo" autofocus maxlength="6" minlength="6"/>
       @error('cod_processo') <span class="text-danger">{{ $message }}</span>@enderror
  
    </div>
    <div class="col-6">
    <label>Municípios</label>
            <select wire:model="selectedMunicipio" wire:model="municipio_id" id="municipio_id" name="municipio_id" class="form-control">
                <option value ="0" >== Municipios ==</option>
                @foreach($municipios as $municipios)
                <option value="{{$municipios->id}}">{{$municipios->nome_municipio}}</option>
                @endforeach
                @error('municipio_id') <span class="text-danger">{{ $message }}</span>@enderror
            </select></div>
  <div class="col">
  @if(!is_null($comunidades))



   
    <div class="col">
    <label>Comunidades</label>
<select wire:model="selectedComunidade" wire:model="comunidade_id" id="comunidade_id" name="comunidade_id" class="form-control">
    <option value ="" >== Comunidades ==</option>
    @foreach($comunidades as $comunidades)
    <option value="{{$comunidades->id}}">{{$comunidades->nome_comunidade}}</option>
    @endforeach
</select>
@endif
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="">CPF</label>
      <input type="number" wire:model="requerente_id" class="form-control" list="datalistOptions" id="requerente_id" name="requerente_id" placeholder="Pesquise o CPF do requerente">
      <datalist id="datalistOptions">
    @foreach($requerentes as $r)
    
    <option value="{{$r->id}}">{{$r->cpf}}</option>
 
  @endforeach
  
</datalist>
    </div>
    <div class="col-5">
      <label for=""> Data de Ocupação</label>
     <input type="date" class="form-control" aria-label="Sizing example input" id="data_ocupacao" wire:model="data_ocupacao" name="data_ocupacao" required aria-describedby="inputGroup-sizing-sm">

    </div>
    <div class="col">
      <label for=""> Data de Requerimento</label>
      <input type="date" class="form-control" aria-label="Sizing example input" id="data_requerimento" wire:model="data_requerimento" name="data_requerimento" required aria-describedby="inputGroup-sizing-sm">
   
    </div>
  </div>
</div>

<div class="row" style="margin-left:23px;">
  <div class="col">
    <label >Executor</label>
    <br>
 
    
    <select name="executor_id" wire:model="executor_id" id="executor_id" style="width:80%" >

@foreach ($executor as $e)

<option value="{{$e->id}}">{{$e->nome_executor}}</option>

@endforeach
    
</select></div>
  <div class="col">
  <label for="">Cultura</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="cultura" wire:model="cultura" name="cultura" aria-describedby="inputGroup-sizing-sm" required>

  

  </div>
  <div class="w-100"></div>
  <div class="col"><label for="">Denominação</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="denominacao" wire:model="denominacao" name="denominacao" aria-describedby="inputGroup-sizing-sm" required>
</div>
  <div class="col"> <label for="">Área</label>
  <input type="text" class="form-control" aria-label="Sizing example input" id="area" wire:model="area" name="area" aria-describedby="inputGroup-sizing-sm" required>
</div>
</div>



 

<label >Projeto</label>
    <br>

  <select name="projeto_id" wire:model="projeto_id" id="projeto_id" style="width:80%; margin-bottom: 50px;" >

@foreach ($projeto as $p)

<option value="{{$p->id}}">{{$p->descricao}}</option>

@endforeach



      <div>
  <textarea name="observacoes" id="observacoes" wire:model="observacoes" cols="80" rows="15"  placeholder="OBSERVAÇÕES" style="width:100%;" ></textarea>
  </div>
<div>
<select name="situacao_id" id="situacao_id" wire:model="situacao_id" style="visibility:hidden;">
 
    <option value="1">RE</option>
    </select>
</div>

<div>
  <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
  </div>
</form>
</div>
</div>

</div>