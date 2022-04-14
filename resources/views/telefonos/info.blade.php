@extends('layouts.app')

@section('title')
    Informacion telefono
@endsection


@section('content')
<br><br>
<div class="container text-white text-center">
    <div class="card bg-dark " >
        <h4 class="">Inventario Telefonos</h4>
        <table class="table table-responsive table-hover">
            <thead class="">
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Modelo(Específico)</th>
                    <th>Procesador</th>
                    <th>Rom</th>
                    <th>Ram</th>
                    <th>Camara principal</th>
                    <th>Selfie</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $row->modelo->marca['marca'] }}</td>
                    <td>{{ $row->modelo['modelo'] }}</td>
                    <td>{{ $row['numero_modelo'] }}</td>
                    <td>{{ $row['procesador'] }}</td>
                    <td>{{ $row['memoria_int'] }}</td>
                    <td>{{ $row['memoria_ram'] }}</td>
                    <td>{{ $row['cam_prin'] }}</td>
                    <td>{{ $row['cam_frontal'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>
@endsection
