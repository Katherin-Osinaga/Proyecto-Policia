@extends('layouts.app')
@section('content')
<br><br>
<div class="container bg-white border rounded">
    <p class="display-4">Lista de los Casos</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Acciones</th>                
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Tipo Caso</th>
                <th scope="col">Policia</th>
                <th scope="col">Delincuente</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th>
                        <a href="/caso/{{$item->id}}/edit" class="btn btn-success btn-xs btn-block">Editar</a>
                    </th>
                    <th>
                        <form action="/caso/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs btn-block">Eliminar</button>            
                        </form>
                    </th>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>                
                    <td>{{ $item->tipo_caso }}</td>
                    <td>{{ $item->policia->nombre }}</td> 
                    <td>{{ $item->delincuente->nombre }}</td> 
                    <td>{{ $item->estado }}</td> 
                </tr>                                  
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="container">
    {{ $datos->links() }}
</div>
@endsection