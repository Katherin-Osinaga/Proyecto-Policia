@extends('layouts.app')

@section('content')
<br><br><br>
    <div class="container">
        <form action="/policia/{{ $policia->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-between align-items-center">
                <p class="display-4">Editar Policia</p>
                <label class="alert alert-success">Grado Actual : {{ $policia->grado->nombre_grado }}</label>    
            </div>
            <hr>
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" class="form-control" name="nombre" value="{{$policia->nombre}}">
            </div>
            <div class="form-group">
                <label for="">Apellido Paterno : </label>
                <input type="text" class="form-control" name="paterno" value="{{$policia->ap_paterno}}">
            </div>
            <div class="form-group">
                <label for="">Apellido Materno : </label>
                <input type="text" class="form-control" name="materno" value="{{$policia->ap_materno}}">
            </div>
            <div class="form-group">
                <label for="">Direccion : </label>
                <input type="text" class="form-control" name="direccion" value="{{$policia->direccion}}">
            </div>
            <div class="form-group">
                <label for="">Telefono : </label>
                <input type="text" class="form-control" name="telefono" value="{{$policia->telefono}}">
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
                <button class="btn btn-primary">Actualizar Registro</button>
            </div>
        </form>
    </div>
@endsection