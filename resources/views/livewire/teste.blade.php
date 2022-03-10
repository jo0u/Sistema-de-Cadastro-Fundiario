

<div>

    <div class="row mt-5 ml-2">


    <div class="col-sm-3">
    
                <label>Municipios</label>
                <select wire:model="selectedMunicipio" class="form-control">
                    <option value ="0" >== Municipios ==</option>
                    @foreach($municipios as $municipios)
                    <option value="{{$municipios->id}}">{{$municipios->nome_municipio}}</option>
                    @endforeach
                </select>


                
</div>
</div>


@if(!is_null($comunidades))

<div class="col-sm-3">
    
    <label>Comunidades</label>
    <select wire:model="selectedComunidade" class="form-control">
        <option value ="" >== Comunidades ==</option>
        @foreach($comunidades as $comunidades)
        <option value="{{$comunidades->id}}">{{$comunidades->nome_comunidade}}</option>
        @endforeach
    </select>


</div>


@endif

</div>


