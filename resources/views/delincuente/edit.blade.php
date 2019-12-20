@extends('layouts.app')

@section('content')
<br><br><br>
    <div class="container">
        <form action="/delincuente/{{ $delincuente->id }}" method="POST">
            @csrf
            @method('PUT')            
            <p class="display-4">Editar Detenido</p>
            <hr>
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" class="form-control" name="nombre" value="{{$delincuente->nombre}}">
            </div>
            <div class="form-group">
                <label for="">Apellido Paterno : </label>
                <input type="text" class="form-control" name="paterno" value="{{$delincuente->ap_paterno}}">
            </div>
            <div class="form-group">
                <label for="">Apellido Materno : </label>
                <input type="text" class="form-control" name="materno" value="{{$delincuente->ap_materno}}">
            </div>
            <div class="form-group">
                <label for="">Direccion : </label>
                <input type="text" class="form-control" name="direccion" value="{{$delincuente->direccion}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Actualizar Registro</button>
            </div>
        </form>
    </div>
@endsection