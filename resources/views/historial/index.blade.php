@extends('layouts.app')
@section('content')
<br><br>
<div class="container bg-white border rounded">
    <p class="display-4">Historial de los autores</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Acciones</th>                
                <th scope="col">Historial</th>
                <th scope="col">Sentencia</th>
                <th scope="col">Delincuente</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <th>
                        <a href="/historial/{{$item->id}}/edit" class="btn btn-success btn-xs btn-block">Editar</a>
                    </th>
                    <th>
                        <form action="/historial/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs btn-block">Eliminar</button>            
                        </form>
                    </th>
                    <td>{{ $item->historial }}</td>
                    <td>{{ $item->sentencia }}</td>                
                    <td>{{ $item->delincuente->nombre }}</td>                    
                </tr>                                  
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="container">
    {{ $datos->links() }}
</div>
@endsection