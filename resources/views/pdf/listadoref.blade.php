@extends('pdf.layout')
@section('title','Listado de refacciones')
@section('content')
<br />
<br />
<br />
<p> Listado de refacciones</p>
    <table class="table trable-striped table-bordered">
        <thead>
            <tr>
                <td> ID</td>
                <td> Marca </td>
                <td> Modelo </td>
                <td> Nota </td>
                <td> Tipo </td>
                <td> Modelo Compatible </td>
            </tr>
        </thead>
        <tbody>
            @forelse($row as $row)
            <tr>
                <td> {{ $row->id }} </td>
                <td> {{ $row->marca_ref }} </td>
                <td> {{ $row->modelo_ref }} </td>
                <td> {{ $row->nota }} </td>
                <td> {{ $row->refaccion->tipo }} </td>
                <td> {{ $row->telefono->numero_modelo }} </td>
            </tr>
            @empty
            <tr>
                <td colspan=2> No se encontraron registros</td>
            <tr>
            @endforelse
        </tbody>
    </table>
@endsection
