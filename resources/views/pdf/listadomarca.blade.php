@extends('pdf.layout')
@section('title','Listado de marcas')
@section('content')
<br />
<br />
<br />
<p> Listado de Marcas</p>
			<table class="table trable-striped table-bordered">
			    <thead>
				    <tr>
                        <td> ID</td>
                        <td> Marca </td>
                        <!--td> Estado </td-->
				    </tr>
			    </thead>
			    <tbody>
				    @forelse($row as $marca)
				    <tr>
						<td> {{ $marca->id }} </td>
						<td> {{ $marca->marca }} </td>
						<!--td> {{-- $marca->estado --}} </td-->
					</tr>
				    @empty
                    <tr>
                        <td colspan=2> No se encontraron registros</td>
                    <tr>
			        @endforelse
			    </tbody>
		    </table>
@endsection
