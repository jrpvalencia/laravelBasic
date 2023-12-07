@extends('layouts.plantilla')

    @section('title','Contacto - Perfumería')
    
    @section('head')
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
@endsection()

@section('content')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
<div class="container6">
        
            <h1 class="mt-4"> Forma de Pago </h1>

            <form action="{{ route('typePay.store') }}" method="POST">

                @csrf
                <div class="mb-3">


                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombre:</label>
                        <input type="text" name="name" placeholder="nombre">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">  Enviar  </i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
