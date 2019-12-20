@extends('layout.layouts')
@section('title','Contacto')
@section('content')
<h2>Editar Contacto</h2> <br>
<form action="/contactos/{{ $contacto->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>Ingrese su nombre :</p>
    <input type="text" class="form-control" name="name" value="{{ $contacto->nombre }}"><br>
    <p>Ingrese su apellido :</p>
    <input type="text" class="form-control" name="lastname" value="{{ $contacto->apellido }}"><br>
    <p>Ingrese su telefono :</p>
    <input type="text" class="form-control" name="number" value="{{ $contacto->telefono }}"><br>
    <p>Ingrese su direccion :</p>
    <input type="text" class="form-control" name="address" value="{{ $contacto->direccion }}"><br>
    <p>Ingrese su C.I. :</p>
    <input type="text" class="form-control" name="cia" value="{{ $contacto->ci }}"><br>
    <button class="btn btn-primary">Actualizar Contacto</button>
</form>
@endsection