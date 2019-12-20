@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="display-4">Editar caso</p>
        <form action="/caso/{{ $caso->id }}" method="POST">
            @method('PUT')
            @csrf
            <hr>
            <div class="form-group">
                <label for="">Nombre del caso : </label>
                <input type="text" class="form-control" name="nombre" value="{{ $caso->nombre }}">
            </div>
            <div class="form-group">
                <label for="">Descripcion del caso : </label>
                <textarea name="descripcion"  cols="30" rows="10" class="form-control"> {{ $caso->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Tipo de Caso : </label>
                <input type="text" class="form-control" name="tipo" value="{{ $caso->tipo_caso }}">
            </div>
            <div class="form-group">
                <label for="">Estado</label>
                <select name="estado"  class="custom-select">
                    <option value="{{ $caso->estado }}">{{ $caso->estado }}</option>                    
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Seleccione el delincuente : </label>
                <select name="delincuente"  class="custom-select">
                    @foreach ($delincuente as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>                                            
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Seleccione el policia : </label>
                <select name="policia" class="custom-select">
                    @foreach ($policia as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>                                            
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Guardar Caso</button>
            </div>
        </form>
    </div>
@endsection