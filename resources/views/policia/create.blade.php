@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="/policia" method="POST">
            @csrf
            <p class="display-4">Registro de Policia</p>
            <hr>
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Apellido Paterno : </label>
                <input type="text" class="form-control" name="paterno">
            </div>
            <div class="form-group">
                <label for="">Apellido Materno : </label>
                <input type="text" class="form-control" name="materno">
            </div>
            <div class="form-group">
                <label for="">Direccion : </label>
                <input type="text" class="form-control" name="direccion">
            </div>
            <div class="form-group">
                <label for="">Telefono : </label>
                <input type="text" class="form-control" name="telefono">
            </div>
            <div class="form-group">
                <label for="">Seleccione el grado : </label>
                <select name="grado" class="custom-select">
                    @foreach ($datos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre_grado }}</option>                            
                    @endforeach
                </select>                
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar Registro</button>
            </div>
        </form>
    </div>
@endsection