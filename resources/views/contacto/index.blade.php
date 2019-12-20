@extends('layout.layouts')
@section('title','Contacto')
@section('content')
<a href="/contactos/create" class="btn btn-primary mb-2">Nuevo</a>
    <div class="row">
        @foreach ($datos as $contacto)
            <div class="col-4">
                <div class="card mt-3">
                    <div class="card-header">
                        <p>{{ $contacto->nombre }} {{ $contacto->apellido }}</p>
                    </div>
                    <div class="card-body">
                        <p>Telefono : {{ $contacto->telefono }}</p>
                    </div>
                    <div class="card-footer">
                        <form action="/contactos/{{ $contacto->id }}">
                            @csrf 
                            @method('GET')
                            <button class="btn btn-primary">Ver mas</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach    
    </div>    
@endsection