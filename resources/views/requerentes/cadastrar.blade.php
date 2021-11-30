@extends('layouts.main')
@section('title','Painel de Cadastro')
@section('content')

<form action="/requerente/cadastrar" method="POST" id="formulario">



<div class="container">
    <h2>Cadastro de Requerente</h2>
  <div class="row">
     <div> <label>CPF</div>
    <div class="col"><input type="text" id="cpf" name="cpf" class="form-control" ></div>
   
   
   
    <div class="col">


     <select class="form-select form-select-sm" aria-label=".form-select-sm example">
     <option selected disabled="">Pessoa</option>
        <option value="F">Fisica</option>
        <option value="J">Juridico</option>
     
    </select>
</div>
    
    
    <div class="w-100"></div>
    <div> <label>Nome</div>
    <div class="col"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col">
     <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected disabled="">Sexo</option>
        <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
</div>


<div class="w-100"></div>
<div> <label>Profissão</div>
    <div class="col"><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col">
     <select class="form-select form-select-sm" aria-label=".form-select-sm example">
     <option value="" disabled="" selected="">Selecione o Estado</option>
      <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    </select>
    </select>
</div>



    <div class="col"><label for=""> Data de nascimento</label>
    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col"><label>Nacionalidade</label>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>
    




<div class="w-100"></div>
<div class="col"> 
<label for="">RG</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col">
   <div>
  <br>  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option value="" disabled="" selected="">Estado Civil</option>
      <option value="Solteiro">Solteiro(a)</option>
    <option value="Casado">Casado(a)</option>
    <option value="Divorciado">Divorciado(a)</option>
    <option value="União Estavel">União Estavél </option>
    <option value="Viuvo">Viúvo(a)</option>
    </select>
</div>
    </div>

    
    <div class="w-100"></div>
<div class="col"> 
<label for="">Telefone</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col">
    
    <div class="col"><label for="">Email</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col"></div>
</div>

<div class="w-100"></div>
<div class="col"> 
<label for="">Endereço</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col">
    
    <div class="col"><label for="">Nome do Pai</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>
    <div class="col"></div>
</div>
<div class="w-100"></div>
<div class="col"> 
<label for="">Nome da Mãe</label>    
<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"></div>


 
</div>

<button type="button" name="cadastrar" class="btn btn-success">Cadastrar</button>


</form>




@endsection


