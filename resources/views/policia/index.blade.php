@extends('layouts.app')
@section('content')
<br><br>
<div class="container bg-white border rounded">
    <p class="display-4">Lista de Policias</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th colspan="2" class="text-center">Acciones</th>                
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Grado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($polis as $item)
                <tr>
                    <th>
                        <a href="/policia/{{$item->id}}/edit" class="btn btn-success btn-xs btn-block">Editar</a>
                    </th>
                    <th>
                        <form action="/policia/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs btn-block">Eliminar</button>            
                        </form>
                    </th>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->ap_paterno }}</td>                
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->direccion }}</td> 
                    <td>{{ $item->grado->nombre_grado }}</td> 
                </tr>                                  
            @endforeach
        </tbody>
    </table>
</div><br>
<div class="container">
    {{ $polis->links() }}
</div>
@endsection