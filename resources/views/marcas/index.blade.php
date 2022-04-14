@extends('layouts.app')

@section('title')
    LISTADO MARCAS
@endsection
@section('content')
<br>
<div class="container text-center" >
    <div class="card bg-dark text-light">
        <div class="card-header">
            <h1 class="">Marcas</h1>
        </div>
        <div>
            <a href="{{ url('prntmar') }}" class="btn btn-block btn-outline-info">Imprimir listado de marcas <i class="fas fa-print"></i></a>
        </div>
        <div class="card-body">
            <table class="table responsive-table highlight">
                <thead class="">
                    <tr>
                        <!--th scope="col">
                                ID
                        </th-->
                        <th scope="col">
                                Marca
                        </th>
                        <th scope="col">
                                MODIFICAR
                        </th>
                        <th scope="col">
                                CONSULTAR MODELOS
                        </th>
                        <th scope="col">
                                BORRAR
                        </th>
                    </tr>
                </thead>
                <tbody class="grey-text text-lighten-3">
                    @forelse ($row as $mar)
                        <tr>
                            <!--th>
                                {{ $mar['id'] }}
                            </th -->
                            <td>
                                {{ $mar['marca'] }}
                            </td>
                            <td>
                                <a href="{{ url('mar/'.$mar->id.'/edit') }}">
                                    <button class="btn btn-block btn-outline-primary" >
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('mar/'.$mar->id) }}">
                                    <button type="button" class="btn btn-block btn-outline-info"">
                                        <i class="fas fa-question"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('mar', $mar['id']) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-block btn-outline-danger"">
                                        <i class="fas fa-user-minus"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p>no ai datos oiga</p>
                    @endforelse
                </tbody>
            </table>
            <h5 class="lime-text text-darken-3">Crear nuevo registro</h5>

            <a href="{{ url('mar/create') }}">
                <button class="btn btn-block btn-outline-success">
                    <i class="fas fa-check"></i>
                </button>
            </a>
        </div>
        <div class="card-footer">
            {{ $row->links() }}
        </div>
    </div>
</div>
<br>
@endsection

