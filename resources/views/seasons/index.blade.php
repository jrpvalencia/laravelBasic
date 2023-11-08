@extends('layouts.plantilla')

@section('title','Productos')
@section('head')
<link rel="stylesheet" href="CSS/style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection()

@section('content')

    <main class="table">
        <section class="table__header">
            <h1>Registros</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <i class='bx bx-search-alt'></i>
            </div>
            <a href="{{ route('season.create') }}">
                <p class="add-button">Agregar </p>
            </a>
            <div class="export__file">
                <a href="{{ route('inicio') }}"><label for="export-file" class="export__file-btn"
                        title="Export File"></label></a>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th class="icon-arrow"> Id </th>
                        <th class="icon-arrow"> nombre </th>
                        <th class="icon-arrow"> Acciones </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $seasons)
                        <tr>
                            <td>{{ $seasons['id']}}</td>
                            <td>{{ $seasons['name']}}</td>

                            <td>
                                <div class="button-group">
                                  

                                 <a class="delete-button" href="{{ route('season.destroy',  $seasons['id']) }}">x </a>

                                 <a href="{{ route('season.edit', $seasons['id']) }}" class="edit-button"><i class='bx bxs-edit-alt'></i></a>

                            </div>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection()
 


{{--  @foreach($data as $season)
    <div>
        <h2>Temporada: {{ $season['name'] }}</h2>
        <p>ID: {{ $season['id'] }}</p>
        <p>Fecha de Creación: {{ $season['created_at'] }}</p>
        <p>Fecha de Actualización: {{ $season['updated_at'] }}</p>
    </div>
@endforeach --}}
