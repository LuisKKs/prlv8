@extends('layouts.app')

@section('title')
    Informacion accesorio
@endsection


@section('content')
<div class="container">
    <div class="card center blue-grey darken-4 lime-text text-darken-3" >
        <h4 class="">Informacion de accesorio</h4>
        <table class="table table-dark  responsive-table table-hover">
            <thead class="lime-text text-darken-3">
                <tr>
                    <th>Id</th>
                    <th>Nota</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Compatibilidad</th>
                    <th>Tipo de accesorio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['nota'] }}</td>
                    <td>{{ $row['marca_acc'] }}</td>
                    <td>{{ $row['modelo_acc'] }}</td>
                    <td>{{ $row->modelo['modelo'] }}</td>
                    <td>{{ $row->accesorio['tipo'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
