@extends('layouts.app')

@section('title')
    Listado accesorios
@endsection
@section('content')
<br>
<div class="container" >
    <div class="card bg-dark text-light">
        <div class="card-header">
            <h1 class="">Accesorios</h1>
        </div>
        <div>
            <a href="{{ url('prntacc') }}" class="btn btn-block btn-outline-info">Imprimir listado de accesorios <i class="fas fa-print"></i></a>
        </div>
        <div class="card-body">
            <table class="table table-responsive highlight">
                <thead class="">
                    <tr>
                        <th scope="col">
                            ID
                        </th>
                        <th scope="col">
                            Nota
                        </th>
                        <th scope="col">
                            Marca
                        </th>
                        <th scope="col">
                            Modelo
                        </th>
                        <th scope="col">
                            Modelo comp
                        </th>
                        <th scope="col">
                            Tipo acc
                        </th>
                        <th scope="col">
                            MODIFICAR
                        </th>
                        <th scope="col">
                            CONSULTAR
                        </th>
                        <th scope="col">
                            BORRAR
                        </th>
                    </tr>
                </thead>
                <tbody class="grey-text text-lighten-3">
                    @forelse ($row as $registro)
                        <tr>
                            <th>
                                {{ $registro['id'] }}
                            </th>
                            <td>
                                {{ $registro['nota'] }}
                            </td>
                            <td>
                                {{ $registro['marca_acc'] }}
                            </td>
                            <td>
                                {{ $registro['modelo_acc'] }}
                            </td>
                            <td>
                                {{ $registro->modelo['modelo'] }}
                            </td>
                            <td>
                                {{ $registro->accesorio['tipo'] }}
                            </td>

                            <td>
                                <a href="{{ url('acc/'.$registro->id.'/edit') }}">
                                    <button class="btn btn-block btn-outline-primary" >
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('acc/'.$registro->id) }}">
                                    <button type="button" class="btn btn-block btn-outline-info"">
                                        <i class="fas fa-question"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ url('acc', $registro['id']) }}" method="POST">
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

            <a href="{{ url('acc/create') }}">
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
