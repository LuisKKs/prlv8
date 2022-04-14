@extends('pdf.layout')
@section('title','Listado de telefonos')
@section('content')
<br />
<br />
<br />
<p> Listado de Telefonos</p>
			<table class="table trable-striped table-bordered">
			    <thead>
				    <tr>
                        <td> ID</td>
                        <td> Marca </td>
                        <td> Modelo </td>
				    </tr>
			    </thead>
			    <tbody>
				    @forelse($row as $row)
				    <tr>
						<td> {{ $row->id }} </td>
						<td> {{ $row->modelo->marca->marca }} </td>
						<td> {{ $row->modelo->modelo }} </td>
                        <td> {{ $row->numero_modelo }} </td>
					</tr>
				    @empty
                    <tr>
                        <td colspan=2> No se encontraron registros</td>
                    <tr>
			        @endforelse
			    </tbody>
		    </table>
@endsection
