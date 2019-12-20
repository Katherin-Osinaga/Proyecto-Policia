@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/grado" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nombre del grado : </label>
                <input type="text" name="grado" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
@endsection