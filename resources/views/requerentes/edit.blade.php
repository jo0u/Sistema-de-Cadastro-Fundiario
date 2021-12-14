@extends('layouts.main')
@section('title','Editando requerente '. $requerentes->nome)
@section('content')

<form action="/requerentes/update/{{$requerentes->id}}" method="POST">
    @csrf
    @method('PUT')

<div class="container ">
    <h2>Cadastro de Requerente</h2>
  <div class="row">
     <div> <label>CPF</div>
    <div class="col"><input type="text" id="cpfz" name="cpf" class="form-control" maxlength="14" required value="{{$requerentes->cpf}}" ></div>
   
   
   
    <div class="col">


     <select class="form-select form-select-sm" id="pessoa" name="pessoa" aria-label=".form-select-sm example" required>
     <option value="{{$requerentes->pessoa}}" selected disabled="">@if($requerentes->pessoa == 'F')

        Fisica
    @else
            Juridica

     @endif


     </option>
        <option value="F">Fisica</option>
        <option value="J">Juridico</option>
     
    </select>
</div>
    
    
    <div class="w-100"></div>
    <div> <label>Nome</div>
    <div class="col"><input type="text" class="form-control" aria-label="Sizing example input" id="nome" name="nome" required aria-describedby="inputGroup-sizing-sm" value="{{$requerentes->nome}}"></div>
    <div class="col">
     <select class="form-select form-select-sm" id="sexo" name="sexo" aria-label=".form-select-sm example" required>
        <option selected disabled=""  value="{{$requerentes->sexo}}"> @if($requerentes->sexo == 'M')

        Masculino
        @else
        Feminino
        @endif

        </option>
        <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
</div>


<div class="w-100"></div>
<div> <label>Profissão</div>
    <div class="col"><input type="text" class="form-control" aria-label="Sizing example input" id="profissional" name="profissional"  required aria-describedby="inputGroup-sizing-sm"  value="{{$requerentes->profissional}}"></div>
    <div class="col">
     <select class="form-select form-select-sm" id="estado" name="estado" aria-label=".form-select-sm example" required>
     <option  value="{{$requerentes->estado}}" disabled="" selected=""> {{$requerentes->estado}}</option>
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
    <input type="date" class="form-control" aria-label="Sizing example input" id="data_nascimento" name="data_nascimento" required aria-describedby="inputGroup-sizing-sm"  value="{{$requerentes->data_nascimento->format('Y-m-d')}}"></div>
    <div class="col"><label>Nacionalidade</label>
    <input type="text" class="form-control" aria-label="Sizing example input" id="nacionalidade" name="nacionalidade" required aria-describedby="inputGroup-sizing-sm" value="{{$requerentes->nacionalidade}}">
</div>
    




<div class="w-100"></div>
<div class="col"> 
<label for="">RG</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="rg" name="rg" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->rg}}"></div>
    <div class="col">
   <div>
  <br>  <select class="form-select form-select-sm" name="estado_civil" id="list" onchange="getSelectValue();" aria-label=".form-select-sm example" required>
  <option value="{{$requerentes->estado_civil}}" disabled="" selected="">{{$requerentes->estado_civil}}</option>
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
<input type="text" class="form-control" id="telefone" name="telefone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->telefone}}"></div>
    <div class="col">
    
    <div class="col"><label for="">Email</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="email" name="email" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->email}}"></div>
    <div class="col"></div>
</div>

<div class="w-100"></div>
<div class="col"> 
<label for="">Endereço</label>    
<input type="text" class="form-control" id="endereco" name="endereco" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->endereco}}"></div>
    <div class="col">
    
    <div class="col"><label for="">Nome do Pai</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="nome_pai" name="nome_pai" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->nome_pai}}"></div>
    <div class="col"></div>
</div>
<div class="w-100"></div>
<div class="col"> 
<label for="">Nome da Mãe</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="nome_mae" name="nome_mae" aria-describedby="inputGroup-sizing-sm" required value="{{$requerentes->nome_mae}}"></div>









<div id="containerCasado" class="card" style="display: block; margin-top: 15px;" >


<div class="w-100"></div>
<div class="col"> 
<label for="">Nome do Conjugue</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="nome_conjugue" name="nome_conjugue" aria-describedby="inputGroup-sizing-sm" value="{{$requerentes->nome_conjugue}}"></div>
    <div class="col">
    
    <div class="col"><label for="">CPF</label>    
<input type="text" class="form-control" aria-label="Sizing example input" id="cpf_conjugue" name="cpf_conjugue" aria-describedby="inputGroup-sizing-sm" value="{{$requerentes->cpf_conjugue}}"></div>
    <div class="col"></div>
</div>

<div class="w-100"></div>
<div> <label>RG</div>
    <div class="col"><input type="text" class="form-control" id="rg_conjugue" name="rg_conjugue" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{$requerentes->rg_conjugue}}"></div>
    <div class="col"><br>
     <select class="form-select form-select-sm" id="estado_conjugue" name="estado_conjugue" aria-label=".form-select-sm example">
     <option value="{{$requerentes->estado_conjugue}}"disabled="" selected="">{{$requerentes->estado}}</option>
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





</div>






</div>


<input type="submit" class="btn btn-primary" value="Editar">



</form>

<script >
     function getSelectValue(){
        var setSelectValue = document.getElementById("list").value;
           if((setSelectValue === "Casado")){
            if(containerCasado.style.display === "none"){
        containerCasado.style.display = "block";
            }else{
                containerCasado.style.display = "block";
            }
            

           }else{
               
            containerCasado.style.display = "none";
           }

    }


    




$("#telefone").mask("(99) 99999-9999");

$("#cpfz").mask("999.999.999-99");


</script>


@endsection


