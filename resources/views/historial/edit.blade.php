@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/historial/{{ $historial->id }}" method="POST">
            <p class="display-4">Historial del Delincuente</p>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nombre del Delincuente : {{ $historial->delincuente->nombre }} {{ $historial->delincuente->ap_paterno }}</label>
                <input type="hidden" name="delincuente" value="{{ $historial->id_delincuente }}">
            </div>
            <div class="form-group">
                <label for="">Historia : </label>
                <textarea name="historial" cols="30" rows="10" class="form-control">{{ $historial->historial }}</textarea>
            </div>    
            <div class="form-group">
                <label for="">Sentencia : </label>
                <input type="text" name="sentencia" class="form-control" value="{{ $historial->sentencia }}">
            </div>            
            <div class="form-group">
                <button class="btn btn-primary">Guardar Historial</button>
            </div>
        </form>
    </div>
@endsection