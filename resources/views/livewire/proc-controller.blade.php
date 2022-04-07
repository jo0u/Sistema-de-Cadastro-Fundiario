<div> 

        @include('livewire.create')
  
  
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>Numero de Processo</th>
                <th>Data de Requerimento</th>
                <th>CPF</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($processos as $value)
            <tr>
                <td>{{ $value->cod_processo }}</td>
                <td>{{ $value->data_requerimento }}</td>
                <td>{{ $value->requerente->cpf }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>