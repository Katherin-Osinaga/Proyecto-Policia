@extends('layouts.app')
@section('title','Contacto')
@section('content')
<div class="container">
    <h2>Sugerencias</h2> <br>
    <form action="/contacto" method="POST">
        @csrf
        <p>Ingrese su nombre :</p>
        <input type="text" class="form-control" name="name"><br>
        <p>Ingrese su email :</p>
        <input type="text" class="form-control" name="mail"><br>
        <p>Ingrese su sugerencia :</p>
        <input type="text" class="form-control" name="su"><br>
        <button class="btn btn-primary">Enviar Sugerencia</button>
    </form>
</div>
@endsection