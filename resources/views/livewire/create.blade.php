<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<div class="card">
  <div class="card-body">
  <form method="POST" action="/processos">
@csrf
<div class="row">
  <div class="col">
 

  <label for="">Codígo de Processo: </label><br>
     <input id="cod_processo" name="cod_processo" type="text" wire:model="cod_processo" autofocus maxlength="6" minlength="6"/>
     @error('cod_processo') <span class="text-danger">{{ $message }}</span>@enderror
  </div>
  <div class="col"><label>Municipios</label>
            <select wire:model="selectedMunicipio" wire:model="municipio_id" id="municipio_id" name="municipio_id" class="form-control">
                <option value ="0" >== Municipios ==</option>
                @foreach($municipios as $municipios)
                <option value="{{$municipios->id}}">{{$municipios->nome_municipio}}</option>
                @endforeach
                @error('municipio_id') <span class="text-danger">{{ $message }}</span>@enderror
            </select></div>
  <div class="col">
  @if(!is_null($comunidades))


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
  <div class="col-8">
    <br>
    <label for="">CPF</label>
  <input type="number" wire:model="requerente_id" class="form-control" list="datalistOptions" id="requerente_id" name="requerente_id" placeholder="Pesquise o CPF do requerente">
<datalist id="datalistOptions">
    @foreach($requerentes as $r)
  <option value="{{$r->id}}">{{$r->cpf}}</option>
  @endforeach
  
</datalist>
  </div>
  
  <div class="col-4"><br><label for=""> Data de Ocupação</label>
    <input type="date" class="form-control" aria-label="Sizing example input" id="data_ocupacao" wire:model="data_ocupacao" name="data_ocupacao" required aria-describedby="inputGroup-sizing-sm"></div>
</div>


<div class="row">
    <div class="col">
      <br>
    <label for=""> Data de Requerimento</label>
    <input type="date" class="form-control" aria-label="Sizing example input" id="data_requerimento" wire:model="data_requerimento" name="data_requerimento" required aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col">
    <br>
    <label for="">Denominação</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="denominacao" wire:model="denominacao" name="denominacao" aria-describedby="inputGroup-sizing-sm" required>


</div>
    <div class="col">
      <br>
      <label for="">Cultura</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="cultura" wire:model="cultura" name="cultura" aria-describedby="inputGroup-sizing-sm" required>





    </div>
    
  </div>

  <div class="row">
  <div class="col-6 col-sm-3">
<br>
  <label style="margin-left:120px;">Executor</label>
  <br>
    
    <select name="executor_id" wire:model="executor_id" id="executor_id" style="width: 550px; margin-left: 120px;">

@foreach ($executor as $e)

<option value="{{$e->id}}">{{$e->nome_executor}}</option>

@endforeach
    
</select>
  </div>
  <div class="col-6 col-sm-3">
    <br>
  <label style="margin-left:450px;">Situação</label>
  <br>
   
    <select name="situacao_id" id="situacao_id" wire:model="situacao_id" style="margin-left: 450px; width:550px;">
    <option disabled selected>Selecione a situação do processo</option>
    <option value="1">RE</option>
    </select>
  </div>

</div>
<div>
    <center>
      <br>
      <label for="">Observações</label>
      <br>
  <textarea name="observacoes" id="observacoes" wire:model="observacoes" cols="80" rows="15" ></textarea>
  </center>
  </div>
  <button type="submit" name="cadastrar" class="btn btn-success" style="margin-bottom: 10px;">Cadastrar</button> 
  </form>


<script>
  $("#cod_processo").mask("99999999");

</script>

</div>




