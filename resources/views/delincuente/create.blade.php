@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/delincuente" method="POST">            
            @csrf
            <p class="display-4">Registro del Autor</p>
            <hr>
            <div class="form-group">
                <label for="">Nombre : </label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Apellido Paterno : </label>
                <input type="text" name="ap_paterno" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Apellido Materno</label>
                <input type="text" name="ap_materno" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar Registro</button>    
            </div>            
        </form>
    </div>
@endsection