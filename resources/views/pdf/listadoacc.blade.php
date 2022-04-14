@extends('pdf.layout')
@section('title','Listado de accesorios')
@section('content')
<br />
<br />
<br />
<p> Listado de accesorios</p>
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
						<td> {{ $row->marca_acc }} </td>
						<td> {{ $row->modelo_acc }} </td>
                        <td> {{ $row->nota }} </td>
                        <td> {{ $row->accesorio->tipo }} </td>
                        <td> {{ $row->modelo->modelo }} </td>
					</tr>
				    @empty
                    <tr>
                        <td colspan=2> No se encontraron registros</td>
                    <tr>
			        @endforelse
			    </tbody>
		    </table>
@endsection
