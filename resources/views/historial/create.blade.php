@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/historial" method="POST">
            <p class="display-4">Historial del Autor</p>
            @csrf
            <div class="form-group">
                <select name="delincuente" class="form-control">
                    @foreach ($datos as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }} {{ $item->ap_paterno }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Historia : </label>
                <textarea name="historial" cols="30" rows="10" class="form-control"></textarea>
            </div>    
            <div class="form-group">
                <label for="">Sentencia : </label>
                <input type="text" name="sentencia" class="form-control">
            </div>            
            <div class="form-group">
                <button class="btn btn-primary">Guardar Historial</button>
            </div>
        </form>
    </div>
@endsection