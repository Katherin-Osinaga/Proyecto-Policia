@extends('layout.layouts')
@section('content')
<div class="card text-left">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <p class="mt-2">Detalle del contacto</p>
            <div class="btn-group"> 
            <form action="/contactos/{{ $contacto->id }}/edit">
                    <button class="btn btn-success mr-2">Editar</button>
                </form>
            <form action="/contactos/{{ $contacto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>                                 
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $contacto->nombre }} {{ $contacto->apellido }}</h5>
      <hr style="text-align : left">
      <p class="card-text"></p>
      <p class="card-text">Direccion: {{ $contacto->direccion }}</p>
      <p class="card-text">Telefono: {{ $contacto->telefono }}</p>
      <p class="card-text">C.I.: {{ $contacto->ci }}</p>
      <a href="/contactos" class="btn btn-primary">Regresar</a>
    </div>
  </div>
  @endsection