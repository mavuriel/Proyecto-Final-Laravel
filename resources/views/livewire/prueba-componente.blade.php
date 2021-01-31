<div>
    <div class="contenedor">
        <input class="form-control" type="text" wire:model="msg">
        <button wire:click="limpiaFiltro" type="button" class="btn btn-info">Buscar</button>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Matrícula</th>
                <th>Conductor</th>
                <th>Destino</th>
                <th>Tara</th>
                <th>Báscula</th>
                <th>Peso Total</th>
                <th></th>
            </tr>
        </thead>

        @forelse($entregas as $e)
        <tr>
            <td>
                <p>{{$e->id}}</p>
            </td>
            <td>
                <p>{{$e->matricula}}</p>
            </td>
            <td>
                <p>{{$e->conductor}}</p>
            </td>
            <td>
                <p>{{$e->destino}}</p>
            </td>
            <td>
                <p>{{$e->tara}}</p>
            </td>
            <td>
                <p>{{$e->bascula}}</p>
            </td>
            <td>
                <p>{{$e->pesototal}}</p>
            </td>
            <td>

                <a class="btn btn-warning" href="/edita/{{$e->id}}">Editar</a>
            </td>

        </tr>
        @empty
        <tr>
            <td>
                <p colspan="3">No hay registros</p>
            </td>
        </tr>

        @endforelse


    </table>

    <div style="display: flex; justify-content: center;">
        {{$entregas->links()}}
    </div>


</div>
