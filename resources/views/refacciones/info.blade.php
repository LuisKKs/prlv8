@extends('layouts.app')

@section('title')
    Info refacciones
@endsection


@section('content')
<div class="container">
    <div class="card center blue-grey darken-4 lime-text text-darken-3" >
        <h4 class="">Informacion de refaccion</h4>
        <table class="table table-dark  responsive-table table-hover">
            <thead class="lime-text text-darken-3">
                <tr>
                    <th>Id</th>
                    <th>Nota</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Compatibilidad</th>
                    <th>Tipo de refaccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['nota'] }}</td>
                    <td>{{ $row['marca_ref'] }}</td>
                    <td>{{ $row['modelo_ref'] }}</td>
                    <td>{{ $row->telefono['numero_modelo'] }}</td>
                    <td>{{ $row->refaccion['tipo'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
