@extends('layouts.app')
@section('content')
<br><br>
<div class="container bg-white border rounded">
    <p class="display-4">Lista de autores</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Acciones</th>                
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th>
                        <a href="/delincuente/{{$item->id}}/edit" class="btn btn-success btn-xs btn-block">Editar</a>
                    </th>
                    <th>
                        <form action="/delincuente/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs btn-block">Eliminar</button>            
                        </form>
                    </th>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->ap_paterno }}</td>                
                    <td>{{ $item->ap_materno }}</td>
                    <td>{{ $item->direccion }}</td> 
                </tr>                                  
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="container">
    {{ $datos->links() }}
</div>
@endsection